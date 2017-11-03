jQuery(document).ready(function($){
    var paged = 1;

    $(".button_more .button").on("click", function(e){
        e.preventDefault();
        paged ++; // exemple de récupération de contenu
        console.log(paged);
        var ajax_section =$(".articles_list"); // zone ou renvoyer le contenu de l'AJAX
        /*jQuery.post(
            ajaxurl, // url du fichier admin-ajax.php,
            {
                'action': 'ajax-actionpost', // nom de l'action à créer
                'post_ID': post_ID // exemple de variable à envoyer.
            },
            function(response){
                ajax_section.append(response);
            }
        );*/

    });

});
