!function ($) {

    $(function(){

        $('section [href^=#]').click(function (e) {
            e.preventDefault()
        })

        // make code pretty
        window.prettyPrint && prettyPrint()

    })

}(window.jQuery)