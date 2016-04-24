/**
 * Created by Artem on 23.04.2016.
 */

$('#message').append('<button id="new" class="btn btn-warning" style="display: none"></button>');
function show()
{
    $.ajax({
        url: 'http://yii2-test-project.com/message/new',
        cache: false,
        success: function (html)
        {
            console.log('html');
            if(html!= 0)
            {

                $('#new')
                    .show()
                    .text(html);
            }
        }
    });
}
setInterval('show()',2000);