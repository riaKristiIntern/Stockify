document.addEventListener('DOMContentLoaded', function() {
    // Select all drawer elements
    const updateDrawer = document.getElementById('drawer-update-product-default');
    const deleteDrawer = document.getElementById('drawer-delete-product-default');
    const createDrawer = document.getElementById('drawer-create-product-default');
    
    // Select buttons to open drawers
    const openUpdateDrawerButton = document.querySelector('[data-drawer-toggle="drawer-update-product-default"]');
    const openDeleteDrawerButton = document.querySelector('[data-drawer-toggle="drawer-delete-product-default"]');
    const openCreateDrawerButton = document.querySelector('[data-drawer-toggle="drawer-create-product-default"]');
    
    // Select buttons to close drawers
    const closeUpdateDrawerButton = document.querySelector('[data-drawer-dismiss="drawer-update-product-default"]');
    const closeDeleteDrawerButton = document.querySelector('[data-drawer-dismiss="drawer-delete-product-default"]');
    const closeCreateDrawerButton = document.querySelector('[data-drawer-dismiss="drawer-create-product-default"]');

    // Function to open a drawer
    function openDrawer(drawer) {
        drawer.classList.remove('translate-x-full');
        drawer.setAttribute('aria-hidden', 'false');
    }

    // Function to close a drawer
    function closeDrawer(drawer) {
        drawer.classList.add('translate-x-full');
        drawer.setAttribute('aria-hidden', 'true');
    }

    // Open drawers
    if (openUpdateDrawerButton) {
        openUpdateDrawerButton.addEventListener('click', function() {
            openDrawer(updateDrawer);
        });
    }

    if (openDeleteDrawerButton) {
        openDeleteDrawerButton.addEventListener('click', function() {
            openDrawer(deleteDrawer);
        });
    }

    if (openCreateDrawerButton) {
        openCreateDrawerButton.addEventListener('click', function() {
            openDrawer(createDrawer);
        });
    }

    // Close drawers
    if (closeUpdateDrawerButton) {
        closeUpdateDrawerButton.addEventListener('click', function() {
            closeDrawer(updateDrawer);
        });
    }

    if (closeDeleteDrawerButton) {
        closeDeleteDrawerButton.addEventListener('click', function() {
            closeDrawer(deleteDrawer);
        });
    }

    if (closeCreateDrawerButton) {
        closeCreateDrawerButton.addEventListener('click', function() {
            closeDrawer(createDrawer);
        });
    }

    // Optional: Close the drawer when clicking outside of it
    window.addEventListener('click', function(e) {
        if (e.target === updateDrawer) {
            closeDrawer(updateDrawer);
        }
        if (e.target === deleteDrawer) {
            closeDrawer(deleteDrawer);
        }
        if (e.target === createDrawer) {
            closeDrawer(createDrawer);
        }
    });
});
