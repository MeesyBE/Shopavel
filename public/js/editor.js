const items = [
	{
		name: 'Learn about the draggable API',
	},
	{
		name: 'Practice guitar',
	},
	{
		name: 'Read a novel for 25 minutes',
	},
	{
		name: 'Practice Thai vocabulary',
	},
	{
		name: 'Sleep',
	},
]
//
function dragAndSortHandler(items) {
	return {
		// Keeps track of when we leave the dropzone
		// Otherwise child events will trigger @dragloave
		dropcheck: 0,
		usedKeyboard: false,
		originalIndexBeingDragged: null,
		indexBeingDragged: null,
		indexBeingDraggedOver: null,
		openedContextMenu: null,
		items: items,
		preDragOrder: items,
		dragstart(event) {
			if (this.openedContextMenu) {
				// Without this the drag will show the context menu
				return this.closeContextMenu()
			}
			// Store a copy for when we drag out of range
			this.preDragOrder = [...this.items]
			// The index is continuously updated to reorder live and also keep a placeholder
			this.indexBeingDragged = event.target.getAttribute('x-ref')
			// The original is needed for then the drag leaves the container
			this.originalIndexBeingDragged = event.target.getAttribute('x-ref')
			// Not entirely sure this is needed but moz recommended it (?)
			event.dataTransfer.dropEffect = "copy"
		},
		updateListOrder(event) {
			// This fires every time you drag over another list item
			// It reorders the items array but maintains the placeholder
			if (this.indexBeingDragged) {
				this.indexBeingDraggedOver = event.target.getAttribute('x-ref')
				let from = this.indexBeingDragged
				let to = this.indexBeingDraggedOver

				if (this.indexBeingDragged == to) return
				if (from == to) return

				this.move(from, to)
				this.indexBeingDragged = to
			}
		},
		// These are needed for the handle effect
		setParentDraggable(event) {
			event.target.closest('li').setAttribute('draggable', true)
		},
		setParentNotDraggable(event) {
			event.target.closest('li').setAttribute('draggable', false)
		},
		resetState() {
			this.dropcheck = 0
			this.indexBeingDragged = null
			this.preDragOrder = [...this.items]
			this.indexBeingDraggedOver = null
			this.originalIndexBeingDragged = null
		},
		// This acts as a cancelled event, when the item is dropped outside the container
		revertState() {
			this.items = this.preDragOrder.length ? this.preDragOrder : this.items
			this.resetState()
		},
		// Just repositions the placeholder when we move out of range of the container
		rePositionPlaceholder() {
			this.items = [...this.preDragOrder]
			this.indexBeingDragged = this.originalIndexBeingDragged
		},
		move(from, to) {
			let items = this.items
    		if (to >= items.length) {
        		let k = to - items.length + 1
				while (k--) {
					items.push(undefined)
				}
			}
			items.splice(to, 0, items.splice(from, 1)[0])
			this.items = items
		},
		// THe rest are just for adding better UX to the context menu
		openContextMenu(event) {
			this.openedContextMenu = event.target.closest('li').__x_for_key
		},
		closeAllContextMenus() {
			this.openedContextMenu = null
		},
		highlightFirstContextButton($event) {
			event.target.nextElementSibling.querySelector('button').focus()
		},
		highlightNextContextMenuItem(event) {
			event.target.closest('li').nextElementSibling.querySelector('button').focus()
		},
		highlightPreviousContextMenuItem(event) {
			event.target.closest('li').previousElementSibling.querySelector('button').focus()
		},
	}
}
