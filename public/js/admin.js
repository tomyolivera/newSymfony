const CONFIRM_MESSAGE = "Do you really want to do this?";
const BUTTON_WAIT = `<button class="btn bg-gray-800 text-white" disabled>Wait</button>`;

function ban(id){
    if(!confirm(CONFIRM_MESSAGE)){
        return;
    }

    $(".td_ban_" + id).html(BUTTON_WAIT);

    let path = Routing.generate('admin_users_ban', {id: id});
        
    $.post(path, {id: id}, (res) => {
        if(res['ban']){
            button = `<button class="btn bg-red-600 hover:bg-red-800 text-white" onclick="ban(${id})">True</button>`
        }else{
            button = `<button class="btn bg-green-500 hover:bg-green-700 text-white" onclick="ban(${id})">False</button>`
        }
        $(".td_ban_" + id).html(button);
    });
}