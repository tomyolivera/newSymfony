const CONFIRM_MESSAGE = "Do you really want to do this?";
const BUTTON_WAIT = `<button class="btn bg-gray-700 text-white" disabled>Wait</button>`;

function ban(id){
    if(!confirm(CONFIRM_MESSAGE)){
        return;
    }

    $(".td_ban_" + id).html(BUTTON_WAIT);

    let path = Routing.generate('admin_users_ban', {id: id});
        
    $.post(path, {id: id}, (res) => {
        if(res['ban']){
            button = `<button class="btn bg-red-600 hover:bg-red-800 text-white" onclick="ban(${id})">True</button>`
            role = `<span class="text-red-500 d-flex justify-content-between"> BAN <i class="material-icons">error</i> </span>`;
        }else{
            button = `<button class="btn bg-green-500 hover:bg-green-700 text-white" onclick="ban(${id})">False</button>`
            role = `<span class="text-green-600 d-flex justify-content-between"> USER <i class="material-icons">person</i> </span>`;
        }
        $(".td_ban_" + id).html(button);
        $("#roles_" + id).html(role);
    });
}