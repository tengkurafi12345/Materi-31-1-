$(document).ready(function(){
    var expression = '';

    $('.clear').click(function(){
        $('.input').text('');
        expression = '';
        result = '';
        $('h2').text("Result = " + result);
    });

    $('.equal').click(function(){
        expression = $('.input').text();
        try {
            var result = eval(expression);
            $('h2').text("Result = " + result);
        } catch (error) {
            alert('Invalid expression');
        }
    });

    $('.multiply, .divide, .minus, .plus').click(function(){
        expression += $(this).text();
        $('.input').text(expression);
    });

    $('.one, .two, .three, .four, .five, .six, .seven, .eight, .nine, .decimal').click(function(){
        expression += $(this).text();
        $('.input').text(expression);
    });

});