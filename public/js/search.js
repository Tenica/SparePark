const bookSpace1 = document.getElementById('space1')
const bookSpace2 = document.getElementById('space2')
const bookSpace3 = document.getElementById('space3')
const bookSpace4 = document.getElementById('space4')
const bookSpace5 = document.getElementById('space5')
const bookSpace6 = document.getElementById('space6')


function login(params) {
    console.log("pompom")
}




[bookSpace1, bookSpace2, bookSpace3, bookSpace4, bookSpace5, bookSpace6].forEach((element)=>{
    element.addEventListener('click', login);
});