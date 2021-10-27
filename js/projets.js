const partner = document.querySelector('#partenaire');

let partenaires = ['partenaire1', 'partenaire2', 'partenaire3'];



for (let x = 0; x < partenaires.length; x++){
    let divPartner = document.createElement('div')
    let input = document.createElement('input')
    let a = document.createElement('a')

    let typeCheckbox = document.createAttribute('type')
    let typeA = document.createAttribute('href')
    let typeDivPartnerClass = document.createAttribute('class')
    let typeDivPartnerId = document.createAttribute('id')

    typeA.value = '#'
    typeCheckbox.value = 'checkbox'
    typeDivPartnerClass.value = 'form-check'
    typeDivPartnerId.value = 'partenaire' + x

    input.setAttributeNode(typeCheckbox)
    a.setAttributeNode(typeA)
    divPartner.setAttributeNode(typeDivPartnerClass)
    divPartner.setAttributeNode(typeDivPartnerId)

    a.innerHTML = partenaires[x]
    
    partner.appendChild(input);
    partner.appendChild(a)
    partner.appendChild(divPartner)
}

const checkBox = document.querySelector("#don-checkbox")
const btn = document.querySelector("#don")
checkBox.addEventListener('click',()=>{
    if(checkBox.checked == true) {
        btn.classList.remove('disabled')
    } else {
        btn.classList.add('disabled')
    }
})