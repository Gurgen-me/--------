<div class="popup">
    <div class="popup-close" id="closeAdd">&#10006;</div>
    <form method="post" class="form" enctype="multipart/form-data">
        <input type="text" name="title" id="name" class="form-input" required placeholder="Заголовок статьи">
        <textarea name="discription" id="textarea" cols="30" rows="10" class="form-input" required
            placeholder="Описание статьи"></textarea>
        <input type="file" name="add_image" id="jvsdcs8cg" accept=".png,.jpg,.jpeg" required>
        <button type="submit" class="form-btn" id="changeBtn">Добавить запись</button>
    </form>
</div>

<script>
    const openAddBtn = document.getElementById("addNewPost");
    const popup = document.querySelector(".popup");
    const image = document.querySelector("#jvsdcs8cg");
    const closeAdd = document.getElementById("closeAdd");
    const changeBtn = document.getElementById("changeBtn");

    openAddBtn.addEventListener("click", () => {
        popup.classList.add("_open");
        document.body.classList.add("_no-scroll");
    })

    closeAdd.addEventListener("click", () => {
        popup.classList.remove("_open");
        document.body.classList.remove("_no-scroll");
    })

    changeBtn.addEventListener("click", () => {
        const textarea = document.querySelector('.popup-input');
        textarea.innerHTML = "";
    })

    function addImage() {
        const open = document.createElement("div");
        open.className = "form-btn";
        open.textContent = "Добавить фото";

        image.insertAdjacentElement("afterend", open);

        const triggerInput = () => image.click()
        const haha = event => {
            const files = Array.from(event.target.files)
        }

        open.addEventListener("click", triggerInput);
        image.addEventListener("change", haha);
    }
    addImage()
</script>