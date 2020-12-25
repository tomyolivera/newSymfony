function setActualDate()
{
    let date = new Date();
    $("#task_date_for_month").val(date.getMonth() + 1);
    $("#task_date_for_day").val(date.getDate());
    $("#task_date_for_year").val(date.getFullYear());
}

const CONFIRM_MESSAGE = "Do you really want to do this?";

function deleteAll()
{
    if(!confirm(CONFIRM_MESSAGE)){
        return;
    }

    let path = Routing.generate('task_delete_all');
    let _token = $("#_token").val();
    let limit_tasks = $("#limit_tasks").val();

    $.ajax({
        url: path,
        data: {'_token': _token},
        method: 'DELETE',
        success: () => {
            $("#btn_delete_all").html('');
            $("#tasks_length").html(`0 of ${limit_tasks} tasks`).addClass('bg-green-600');
            $("#tbody").html(`
                <tr>
                    <td class="px-6 py-4 whitespace-no-wrap">
                        <p>You do not have any task yet!</p>
                    </td>
                    <td class=""></td>
                    <td class=""></td>
                    <td class=""></td>
                </tr>
            `);
        }
    });
}