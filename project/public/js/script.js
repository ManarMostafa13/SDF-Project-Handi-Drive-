var textList = document.querySelectorAll(".text")
var image = document.querySelector(".right img")
var imageList  = ["./images/20.jpeg","./images/OIP (8).jpg","./images/group-happy-people-disability-having-fun-tablet-49330297.jpg"]
textList.forEach((text,index) => {
  text.addEventListener("mouseover",()=>{
    image.setAttribute("src",imageList[index])
  })
})