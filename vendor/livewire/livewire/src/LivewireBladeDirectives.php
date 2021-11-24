<?php

namespace Livewire;

class LivewireBladeDirectives
{
    public static function this()
    {
        return "window.livewire.find('{{ \$_instance->id }}')";
    }

    public static function entangle($expression)
    {
        return <<<EOT
<?php if ((object) ({$expression}) instanceof \Livewire\WireDirective) : ?>window.Livewire.find('{{ \$_instance->id }}').entangle('{{ {$expression}->value() }}'){{ {$expression}->hasModifier('defer') ? '.defer' : '' }}<?php else : ?>window.Livewire.find('{{ \$_instance->id }}').entangle('{{ {$expression} }}')<?php endif; ?>
EOT;
    }

    public static function livewireStyles($expression)
    {
        return '{!! \Livewire\Livewire::styles('.$expression.') !!}';
    }

    public static function livewireScripts($expression)
    {
        return '{!! \Livewire\Livewire::scripts('.$expression.') !!}';
    }

    public static function livewire($expression)
    {
        $lastArg = str(last(explode(',', $expression)))->trim();

        if ($lastArg->startsWith('key(') && $lastArg->endsWith(')')) {
            $cachedKey = $lastArg->replaceFirst('key(', '')->replaceLast(')', '');
            $args = explode(',', $expression);
            array_pop($args);
            $expression = implode(',', $args);
        } else {
            $cachedKey = "'".str()->random(7)."'";
        }

        return <<<EOT
<?php
if (! isset(\$_instance)) {
    \$html = \Livewire\Livewire::mount({$expression})->html();
} elseif (\$_instance->childHasBeenRendered($cachedKey)) {
    \$componentId = \$_instance->getRenderedChildComponentId($cachedKey);
    \$componentTag = \$_instance->getRenderedChildComponentTagName($cachedKey);
    \$html = \Livewire\Livewire::dummyMount(\$componentId, \$componentTag);
    \$_instance->preserveRenderedChild($cachedKey);
} else {
    \$response = \Livewire\Livewire::mount({$expression});
    \$html = \$response->html();
    \$_instance->logRenderedChild($cachedKey, \$response->id(), \Livewire\Livewire::getRootElementTagName(\$html));
}
echo \$html;
?>
EOT;
    }
}
