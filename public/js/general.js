$(document).ready(()=>{
    // Titles
    $(".title").addClass("h3");

    // Forms
    $(".input-customize").addClass(
        'mb-3 bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500');
    $(".form-error").addClass(
        'text-red-700'
    );
    $(".form-roles").addClass(
        'bg-gray-900 p-2 my-2 rounded'
    );
    for (let i = 0; i < 4; i++) {
        $("#admin_roles_" + i).addClass(
            'ml-2'
        );
    }

    // Elementes ' i '
    $('i').addClass("material-icons");

    // Buttons
    $(".button-blue").addClass("btn bg-blue-500 hover:bg-blue-700 text-white");
    $(".button-green").addClass("btn bg-green-500 hover:bg-green-700 text-white");
    $(".button-red").addClass("btn bg-red-600 hover:bg-red-800 text-white");
    $(".button-yellow").addClass("btn bg-yellow-600 hover:bg-yellow-800 text-white");
    $(".button-purple").addClass("btn bg-purple-500 hover:bg-gray-800 text-white");
    $(".button-pink").addClass("btn bg-pink-500 hover:bg-pink-800 text-white");
    $(".button-orange").addClass("btn bg-orange-500 hover:bg-orange-800 text-white");
    $(".button-gray").addClass("btn bg-gray-800 hover:bg-gray-700 text-white");
    $(".button-dark").addClass("btn bg-gray-900 hover:bg-gray-800 text-white d-flex align-center");
});