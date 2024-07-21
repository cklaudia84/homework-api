/*const SERVICE_HOST = 'http://localhost/homework-api/public';


function listCart(list)
{
    var ul = document.querySelector('#list ul');
 
    var html = '';
    for(var item of list)
        {
            html += `<li>
            <p>${item.id}</p>
            <strong>${item.name}</strong>
            <p>${item.price}</p>
            <p>${item.piece}</p>
        </li>`;
        }
}

async function getCart(onReady)
{
    var response = await fetch(SERVICE_HOST +'cart');
    var data = await response.json();
    onReady(data);
}
async function addNewCart(id, data, onReady)
{
    var formData = new FormData();
    formData.append('name', data.name);
    formData.append('price', data.price);
    formData.append('piece', data.piece);

    var response = await fetch(SERVICE_HOST +'cart/'+ id,
    { 
        method: 'POST',
        body: new URLSearchParams(formData)
    });
    var data = await response.json();
    onReady(data);
}
async function getCartById(id, onReady)
{
    var response = await fetch(SERVICE_HOST +'cart/'+ id);
    var data = await response.json();
    onReady(data);
}
async function updateCart(id, data, onReady) 
{
    var formData = new FormData();
    formData.append('name', data.name);
    formData.append('price', data.price);
    formData.append('piece', data.piece);

    var response = await fetch(SERVICE_HOST + 'cart/' + id, 
    {
        method: 'POST',
        body: new URLSearchParams(formData)
    });
    var data = await response.json();
    onReady(data);
}

async function deleteCart(id, onReady) 
{
    var response = await fetch(SERVICE_HOST + 'cart/' + id, 
    {
        method: 'POST'
    });
    var data = await response.json();
    onReady(data);
}
 */