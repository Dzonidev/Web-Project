let allTotal=0;


function addToCart(element){

    let mainEl= element.closest('.single-item');
    let price=mainEl.querySelector('.price').innerText;
    let name=mainEl.querySelector('h3').innerText;
    let quantity=mainEl.querySelector('input').value;

    let cartItems= document.querySelector('.cart-items');

    if(parseInt(quantity)> 0)
    {
       
        price= parseInt(price);
        let total=price* parseInt(quantity);
        allTotal +=total;
        cartItems.innerHTML += `<div class="cart-single-item">
                                <h3>${name}</h3>
                                <p>${price}RSD x ${quantity} = <span>${total}</span>RSD</p>
                                <button onclick="removeFromCart(this)" class="remove-item">Ukoni</button>
                                </div>`;


        document.querySelector('.total').innerText=`Ukupna cena: ${allTotal} RSD`
        element.innerText='Dodato';
        element.setAttribute("disabled","true");
    }
    else{
        alert('Odaberi kolicinu');
    }
    
    
}


function removeFromCart(element)
{
     let mainEl=element.closest('.cart-single-item');
    let price = mainEl.querySelector('p span').innerText;
    let name=mainEl.querySelector('h3').innerText;
    let items= document.querySelectorAll('.single-item');

    price=parseInt(price);
    allTotal -= price;

    document.querySelector('.total').innerText=`Total: ${allTotal}RSD`;
    mainEl.remove();

    items.forEach(function (item) {

        let itemName = item.querySelector('.si-content h3').innerText;
        if(itemName===name)
        {
            item.querySelector('.actions input').value=0;
            item.querySelector('.actions button').removeAttribute('disabled');
            item.querySelector('.actions button').innerText="Dodaj";
        }


        

    })
    
}




