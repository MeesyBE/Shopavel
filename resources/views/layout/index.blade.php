@extends('layouts.shopavel', ['title' => 'Layout', 'subtitle' => 'Edit layout'])
@section('content')

<div class="flex flex-row justify-between p-4">
    <div class="">
        <button class="bg-indigo-700 hover:bg-indigo-500 text-white font-bold py-2 px-4 rounded inline-flex items-center ml-4" >
            <span class="material-icons">
                save
            </span> Save
            <span class="mat-button-focus-overlay"></span>
        </button>
    </div>

</div>

<div x-data="Setup()">
     <button
     @click.prevent="isNotificationsPanelOpen=true"
     >BUTTON</button>

     <section
     x-ref="notificationsPanel"
     x-show="isNotificationsPanelOpen"
     @keydown.escape="isNotificationsPanelOpen=false">
         NOTIFICATIONS PANEL
     </section>
 </div>

 <script>
 function Setup()
 {
     return {
         loading: true,
         isNotificationsPanelOpen: false,
         openNotificationsPanel() {
             this.isNotificationsPanelOpen = true;
             console.log('openNotificationsPanel called');
             console.log(this.isNotificationsPanelOpen);
             this.$nextTick(() => {
                 this.$refs.notificationsPanel.focus()
             })
         }
     }
 }
 </script>



@stop
