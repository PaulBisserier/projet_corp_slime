const btnSend = document.querySelector("#envoyer")
const inputAdd = document.querySelector("#formGroupExampleInput")

inputAdd.addEventListener('change', ()=>{
    btnSend.addEventListener('click',()=>{
        partenaires.push(inputAdd.value)
        alert(inputAdd.value)
    })
})
