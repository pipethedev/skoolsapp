
const act = document.querySelector('#act');

function showRecent(doc){

    
    let div1 = document.createElement('div');
    let div2 = document.createElement('div');
    let p = document.createElement('p');
    let strong = document.createElement('strong');

    div1.setAttribute('class', 'media text-muted pt-3');
    div2.setAttribute('class', 'mr-2 rounded');
    var col = doc.data().color;
    div2.setAttribute('style', 'width: 32px; height: 32px; background:' + col );
    p.setAttribute('class', 'media-body pb-3 mb-0 small lh-125 border-bottom border-gray');
    strong.setAttribute('class', 'd-block text-gray-dark');

    var a = "@";


    strong.textContent = a + doc.data().user;
    p.textContent = doc.data().action;

    p.appendChild(strong); 
    div1.appendChild(div2)
    div1.appendChild(p);
    act.appendChild(div1);




}

var hash = Cookies.get('hash');

db.collection('recent').where('hash', '==', hash).limit(5).get().then((snapshot) => {
    snapshot.docs.forEach(doc => {
        showRecent(doc)
    })
})