jQuery(document).ready(function ($) {
    //booking for 1-2
    let picker1 = new Lightpick({
        field: document.getElementById('book1'),
        singleDate: false,
        onSelect: function(start, end){
            let str = '';
            str += start ? start.format('Do MMMM YYYY') + ' to ' : '';
            str += end ? end.format('Do MMMM YYYY') : '...';
            document.getElementById('result1').value = str;
            $('#book-btn1').show().css('display', 'block');
        }
    });

//booking for 3-4
    let picker2 = new Lightpick({
        field: document.getElementById('book2'),
        singleDate: false,
        onSelect: function(start, end){
            let str = '';
            str += start ? start.format('Do MMMM YYYY') + ' to ' : '';
            str += end ? end.format('Do MMMM YYYY') : '...';
            document.getElementById('result2').value = str;
            $('#book-btn2').show().css('display', 'block');
        }
    });

//booking for 5-8
    let picker3 = new Lightpick({
        field: document.getElementById('book3'),
        singleDate: false,
        onSelect: function(start, end){
            let str = '';
            str += start ? start.format('Do MMMM YYYY') + ' to ' : '';
            str += end ? end.format('Do MMMM YYYY') : '...';
            document.getElementById('result3').value = str;
            $('#book-btn3').show().css('display', 'block');
        }
    });

//booking for 9
    let picker4 = new Lightpick({
        field: document.getElementById('book4'),
        singleDate: false,
        onSelect: function(start, end){
            let str = '';
            str += start ? start.format('Do MMMM YYYY') + ' to ' : '';
            str += end ? end.format('Do MMMM YYYY') : '...';
            document.getElementById('result4').value = str;
            $('#book-btn4').show().css('display', 'block');
        }
    });

//booking for 10
    let picker5 = new Lightpick({
        field: document.getElementById('book5'),
        singleDate: false,
        onSelect: function(start, end){
            let str = '';
            str += start ? start.format('Do MMMM YYYY') + ' to ' : '';
            str += end ? end.format('Do MMMM YYYY') : '...';
            document.getElementById('result5').value = str;
            $('#book-btn5').show().css('display', 'block');
        }
    });

    $(document).on ('click','a.booking',function (e) {
        e.preventDefault();
        let selectedCottage = $(this).parents('.right').find('h4.house-name').text();
        let selectedDate = $(this).parents('.right').find('.result').val();

        $('.pop-up-wrap .cottage-name').html(selectedCottage);
        $('.pop-up-wrap .cottage-date').html(selectedDate);
        $('.pop-up-wrap').show();
    });

    $('.pop-up-wrap .close').click(function (e) {
        $(this).parents('.pop-up-wrap').hide();
    });

});