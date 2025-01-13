@once
    <div class="offcanvas offcanvas-end" tabindex="-1" id="notification-sidebar" aria-labelledby="notification-sidebar-label"
        data-url="{{ route('notifications.index') }}" data-count-url="{{ route('notifications.count-unread') }}">
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>

        <div class="notification-content"></div>
    </div>

    <script src="{{ asset('vendor/core/core/base/js/notification.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#skills-select').select2({
                placeholder: "Select skills",
                allowClear: true
            });
        });
    </script>
@endonce
