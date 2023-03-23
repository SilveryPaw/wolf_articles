function clear_error_messages()
{
    let warnings = document.getElementsByClassName("warning");
    while(warnings.length>0)
    {
        warnings[0].remove();
    }

}

function add_error_message(block, message)
{
    let error = document.createElement('div');
    error.className = "warning";
    error.innerHTML = message;
    block.append(error);
}
