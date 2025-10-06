(function ($) {
    $(document).ready(function () {
        // Hide all answers initially
        $('.rank-math-answer').hide();

        // Make the first item active by default
        var $firstItem = $('.rank-math-list-item').first();
        $firstItem.addClass('active');
        $firstItem.find('.rank-math-answer').show();

        // Toggle on question click
        $('.rank-math-question').on('click', function () {
            var $item = $(this).closest('.rank-math-list-item'); // parent container
            var $answer = $item.find('.rank-math-answer');

            // Close other items
            $('.rank-math-list-item').not($item).removeClass('active')
                .find('.rank-math-answer').slideUp();

            // Toggle current one
            $item.toggleClass('active');
            $answer.stop(true, true).slideToggle();
        });
    });
})(jQuery)