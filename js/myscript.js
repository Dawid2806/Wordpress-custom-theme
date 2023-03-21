const showButton = document.querySelector("#navButton");
const closeButton = document.querySelector("#closeButton");
const navigation = document.querySelector("#Nav");
const menuItemDetails = document.querySelectorAll(".menu-item-details");
const menuItemName = document.querySelectorAll(".menu-item-name");
const iconInMenu = document.querySelectorAll(".icon");
const ulElements = document.getElementsByTagName("ul");

const showMenuHandler = () => {
  navigation.style.display = "flex";
};

const closeMenuHandler = () => {
  navigation.style.display = "none";
};

const toggleMenuItemDetails = () => {
  menuItemDetails.forEach((item, index) => {
    const menuItem = menuItemName[index];
    menuItem.addEventListener("click", () => {
      menuItemDetails.forEach((item) => item.classList.remove("active"));
      item.classList.toggle("hidden");
    });
  });
};

const setListStyle = () => {
  const liElements = document.getElementsByTagName("li");
  for (let i = 0; i < liElements.length; i++) {
    liElements[i].style.listStyleType = "square";
  }
};
setListStyle();
toggleMenuItemDetails();
showButton.addEventListener("click", showMenuHandler);
closeButton.addEventListener("click", closeMenuHandler);
