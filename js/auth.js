const submit = document.querySelector(".auth__submit");
const pageBody = document.body;

function modal(error, title, isSuccess = false) {
    const templateModal = `<div class="modal">
        <div class="modal__wrapper">
            <p class="modal__title">${title}</p>
            <p class="modal__text-error">${error}</p>
            <button class="modal__button" type="button">Ок</button>
        </div>
    </div>`;
    
    pageBody.insertAdjacentHTML("beforeend", templateModal);
    
    let modal = document.querySelector(".modal");
    const buttons = document.querySelectorAll(".modal__button");

    const closeModal = () => {
        modal = document.querySelector(".modal");
        modal.remove();
        if (isSuccess) {
            window.location.href = `index.php`;
        }
    };
    
    buttons.forEach((button) => {
        button.addEventListener("click", closeModal);
    });
}

submit.addEventListener("click", (evt) => {
    evt.preventDefault();
    const dataUser = {
        login: document.querySelector(".auth__input[type='text']").value,
        password: document.querySelector(".auth__input[type='password']").value,
    };
    const data = new FormData();
    data.append("data", JSON.stringify(dataUser));
    fetch("./server/authentication.php", {
        method: "POST",
        body: data
    })
        .then(response => {
            if (response.ok) {
                return response.json();
            }
            else {
                throw new Error("Не удалось выполнить запрос");
            }
        })
        .then(data => {
            if (data.success) {
                modal(data.message, data.title, true);
            }
            else {
                modal(data.message, data.title);
            }
        })
        .catch(error => {
            modal(error, "Произошла ошибка");
        });
});