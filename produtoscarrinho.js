let openShopping = document.querySelector('.shopping');
let closeShopping = document.querySelector('.closeShopping');
let list = document.querySelector('.list');
let listCard = document.querySelector('.listCard');
let body = document.querySelector('body');
let total = document.querySelector('.total');
let quantity = document.querySelector('.quantity');
var totalP = 0;

openShopping.addEventListener('click', () => {
    body.classList.add('active');
})
closeShopping.addEventListener('click', () => {
    body.classList.remove('active');
})


let products = [
    {
        id: 1,
        name: 'Garrafa Térmica Switchback | 473mL',
        image: '1.PNG',
        price: 235
    },
    {
        id: 2,
        name: 'Garrafa Térmica Switchback | 473mL',
        image: '2.PNG',
        price: 235
    },
    {
        id: 3,
        name: 'Garrafa Térmica Classic Hydration | 750mL',
        image: '3.PNG',
        price: 270
    },
    {
        id: 4,
        name: 'Mug Térmico Classic Stanley | 354mL',
        image: '4.PNG',
        price: 199
    },
    {
        id: 5,
        name: 'Garrafa Térmica Quick Flip Stanley | 710mL',
        image: '5.PNG',
        price: 245
    },
    {
        id: 6,
        name: 'Garrafa Térmica Quick Flip Stanley | 710mL',
        image: '6.PNG',
        price: 245
    },
    {
        id: 7,
        name: 'Garrafa Térmica Flip Straw Stanley Lagoon | 651mL',
        image: '7.PNG',
        price: 269
    },
    {
        id: 8,
        name: 'Tumbler Térmico Flip Straw Stanley Lagoon | 887mL',
        image: '8.PNG',
        price: 295
    },
    {
        id: 9,
        name: 'Jug Térmico Flip Straw Stanley Lagoon | 1,2L',
        image: '9.PNG',
        price: 375
    },
    {
        id: 10,
        name: 'Copo Quencher 2.0 Rose Quartz | 1,18L',
        image: '10.PNG',
        price: 315
    },
    {
        id: 11,
        name: 'Garrafa Térmica Flip Straw Kids Stanley | 500mL',
        image: '11.PNG',
        price: 245
    },
    {
        id: 12,
        name: 'Garrafa Térmica Quick Flip Stanley | 710mL',
        image: '12.PNG',
        price: 245
    }
];
let listCards = [];
function initApp() {
    products.forEach((value, key) => {
        let newDiv = document.createElement('div');
        newDiv.classList.add('item');
        newDiv.innerHTML = `
            <img src="img/produtos/${value.image}">
            <div class="title">${value.name}</div>
            <div class="price">R$ ${value.price.toLocaleString()},00</div>
            <button onclick="addToCard(${key})" class="card-button">Adicionar ao carrinho</button>`;
        list.appendChild(newDiv);
    })
}
initApp();
function addToCard(key) {
    if (listCards[key] == null) {
        // copy product form list to list card
        listCards[key] = JSON.parse(JSON.stringify(products[key]));
        listCards[key].quantity = 1;
    }
    reloadCard();
}
function reloadCard() {
    listCard.innerHTML = '';
    let count = 0;
    let totalPrice = 0;
    listCards.forEach((value, key) => {
        totalPrice = totalPrice + value.price;
        count = count + value.quantity;
        if (value != null) {
            let newDiv = document.createElement('li');
            newDiv.innerHTML = `
                <div><img src="img/produtos/${value.image}"/></div>
                <div>${value.name}</div>
                <div><strong>R$${value.price.toLocaleString()},00</strong></div>
                <div>
                    <button onclick="changeQuantity(${key}, ${value.quantity - 1})">-</button>
                    <div class="count">${value.quantity}</div>
                    <button onclick="changeQuantity(${key}, ${value.quantity + 1})">+</button>
                </div>
                </br>`;
            listCard.appendChild(newDiv);
        }
    })
    total.innerText = "R$" + totalPrice.toLocaleString() + ",00";
    totalP = totalPrice;
    quantity.innerText = count;
}


function changeQuantity(key, quantity) {
    if (quantity == 0) {
        delete listCards[key];
    } else {
        listCards[key].quantity = quantity;
        listCards[key].price = quantity * products[key].price;
    }
    reloadCard();
}

const purchaseButton = document.getElementsByClassName("finalShopping")[0]
purchaseButton.addEventListener("click", fazerCompra)

function fazerCompra() {
    if (totalP == 0) {
        alert("Seu carrinho está vazio!");
    } else {
        alert(`Obrigado pela compra!!
        \nValor do produto: R$ ${totalP},00`);
        window.location.href = "finalizar.php";
    }
}


const finalCompraBody = document.querySelector('valorTotal');
finalCompraBody.innerHTML = `<h2> R$${totalP}</h2>`;




