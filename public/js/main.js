const delet = document.querySelectorAll('.delete');

delet.forEach( element => {

    element.addEventListener('click',  function(event) {
        let choose = confirm("Are you sure you want to delete");

    if( choose ) {
        console.log('elemento cancellato');
    } else {
        event.preventDefault();
    }
    });
});