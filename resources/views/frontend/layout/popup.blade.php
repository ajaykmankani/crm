<style>
    @import url("https://fonts.googleapis.com/css?family=Nunito:400,600,700");

    * {
        box-sizing: border-box;
    }

    body {
        font-family: "Nunito", sans-serif;
        color: rgba(0, 0, 0, 0.7);
    }



    .modal {
        position: fixed;
        left: 0;
        bottom: 0;
        width: 100%;
        height: 0px;
        /* background: rgba(51, 51, 51, 0.5); */
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        transition: 0.4s;
    }

    .modal-container {
        display: flex;
        max-width: 720px;
        width: 100%;
        border-radius: 10px;
        overflow: hidden;
        position: absolute;
        opacity: 0;
        pointer-events: none;
        transition-duration: 0.3s;
        background: #fff;
        transform: translateY(100px) scale(0.4);
    }

    .modal-title {
        font-size: 26px;
        margin: 0;
        font-weight: 400;
        color: #55311c;
    }

    .modal-desc {
        margin: 6px 0 30px 0;
    }

    .modal-left {
        padding: 60px 30px 20px;
        background: #fff;
        flex: 1.5;
        transition-duration: 0.5s;
        transform: translateY(80px);
        opacity: 0;
    }

    /* .modal-button {
        color: #7d695e;
        font-family: "Nunito", sans-serif;
        font-size: 18px;
        cursor: pointer;
        border: 0;
        outline: 0;
        padding: 10px 40px;
        border-radius: 30px;
        background: white;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.16);
        transition: 0.3s;
    } */

    .modal-button:hover {
        border-color: rgba(255, 255, 255, 0.2);
        background: rgba(255, 255, 255, 0.8);
    }

    .modal-right {
        flex: 2;
        font-size: 0;
        transition: 0.3s;
        overflow: hidden;
    }

    .modal-right img {
        width: 100%;
        height: 100%;
        transform: scale(2);
        -o-object-fit: cover;
        object-fit: cover;
        transition-duration: 1.2s;
    }

    .modal.is-open {
        height: 100%;
        background: rgba(51, 51, 51, 0.85);
    }

    .modal.is-open .modal-button {
        opacity: 0;
    }

    .modal.is-open .modal-container {
        opacity: 1;
        transition-duration: 0.6s;
        pointer-events: auto;
        transform: translateY(0) scale(1);
    }

    .modal.is-open .modal-right img {
        transform: scale(1);
    }

    .modal.is-open .modal-left {
        transform: translateY(0);
        opacity: 1;
        transition-delay: 0.1s;
    }

    .modal-buttons {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .modal-buttons a {
        color: rgba(51, 51, 51, 0.6);
        font-size: 14px;
    }

    .sign-up {
        margin: 60px 0 0;
        font-size: 14px;
        text-align: center;
    }

    .sign-up a {
        color: #8c7569;
    }

    .input-button {
        padding: 8px 12px;
        outline: none;
        border: 0;
        color: #fff;
        border-radius: 4px;
        background: #8c7569;
        font-family: "Nunito", sans-serif;
        transition: 0.3s;
        cursor: pointer;
    }

    .input-button:hover {
        background: #55311c;
    }

    .input-label {
        font-size: 11px;
        text-transform: uppercase;
        font-family: "Nunito", sans-serif;
        font-weight: 600;
        letter-spacing: 0.7px;
        color: #8c7569;
        transition: 0.3s;
    }

    .input-block {
        display: flex;
        flex-direction: column;
        padding: 10px 10px 8px;
        border: 1px solid #ddd;
        border-radius: 4px;
        margin-bottom: 20px;
        transition: 0.3s;
    }

    .input-block input {
        outline: 0;
        border: 0;
        padding: 4px 0 0;
        font-size: 14px;
        font-family: "Nunito", sans-serif;
    }

    .input-block input::-moz-placeholder {
        color: #ccc;
        opacity: 1;
    }

    .input-block input:-ms-input-placeholder {
        color: #ccc;
        opacity: 1;
    }

    .input-block input::placeholder {
        color: #ccc;
        opacity: 1;
    }

    .input-block:focus-within {
        border-color: #8c7569;
    }

    .input-block:focus-within .input-label {
        color: rgba(140, 117, 105, 0.8);
    }

    .icon-button {
        outline: 0;
        position: absolute;
        right: 10px;
        top: 12px;
        width: 32px;
        height: 32px;
        border: 0;
        background: 0;
        padding: 0;
        cursor: pointer;
    }

    .scroll-down {
        position: fixed;
        top: 50%;
        left: 50%;
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        color: #7d695e;
        font-size: 32px;
        font-weight: 800;
        transform: translate(-50%, -50%);
    }

    .scroll-down svg {
        margin-top: 16px;
        width: 52px;
        fill: currentColor;
    }

    @media (max-width: 750px) {
        .modal-container {
            width: 90%;
        }

        .modal-right {
            display: none;
        }
    }
</style>


<div class="modal">
    <div class="modal-container">
        <div class="modal-left">
            <h1 class="modal-title">Time to get started!
            </h1>
            <p class="modal-desc">Please share your details and take the first step towards achieving your
                business expension goals.</p>
            <form action="contact" method="post">
                @csrf
                <div class="input-block">
                    <label for="email" class="input-label">Name</label>
                    <input type="text" value="" data-msg-required="Please enter your name." maxlength="100"
                        class="form-control" name="name" placeholder="Your Name" required>
                </div>
                <div class="input-block">
                    <label for="password" class="input-label">Email</label>
                    <input type="email" value="" data-msg-required="Please enter your phone number."
                        maxlength="100" class="form-control" name="email" placeholder="Your Phone Number" required>
                </div>
                <div class="input-block">
                    <label for="password" class="input-label">Mobile</label>
                    <input type="tel" value="" data-msg-required="Please enter your phone number."
                        maxlength="100" class="form-control" name="phone" placeholder="Your Phone Number" required>
                </div>
                <div class="input-block">
                    <label for="password" class="input-label">Services</label>
                    <select data-msg-required="Please select a service." class="form-control" name="service" required>
                        <option value="" selected>Select Service</option>
                        <option value="Website Design and Development">Website Design and Development</option>
                        <option value="Digital Marketing">Digital Marketing</option>
                        <option value="Graphic Design">Graphic Design</option>
                        <option value="Search Engine Optimization (SEO)">Search Engine Optimization (SEO)</option>
                        <option value="Social Media Optimization (SMO)">Social Media Optimization (SMO)</option>
                        <option value="Social Media Marketing (SMM)">Social Media Marketing (SMM)</option>
                        <option value="all of the above"> All of the above</option>
                    </select>
                </div>
                <div class="modal-buttons">
                    <!-- <a href="" class="">Forgot your password?</a> -->
                    <button class="input-button w-100"
                        style="background: #7560eb; box-shadow: 0 5px 5px rgba(139, 117, 255, 0.36)">Submit</button>
                </div>
            </form>
            <!-- <p class="sign-up">Don't have an account? <a href="#">Sign up now</a></p> -->
        </div>
        <div class="modal-right">
            <img src="frontend/assets/images/popup.webp" alt="">
        </div>
        <button class="icon-button close-button d-none d-md-block" onclick="closeModel()" style="color:#fff">
            X
        </button>
        <button class="icon-button close-button d-md-none d-block" onclick="closeModel()" style="color:#000">
            X
        </button>
    </div>

</div>

<!-- <button class="modal-button">Click here to login</button> -->
<script>
    const closeButton = document.querySelector(".close-button");


    const modal = document.querySelector(".modal");

    function openModel() {
        modal.classList.add("is-open");
    }

    setTimeout(function openModel() {
        modal.classList.add("is-open");
    }, 10000);

    function closeModel() {
        modal.classList.remove("is-open");
    }
    // const body = document.querySelector("body");
    // const modal = document.querySelector(".modal");
    // const modalButton = document.querySelector(".modal-button");
    // const closeButton = document.querySelector(".close-button");
    // const scrollDown = document.querySelector(".scroll-down");
    // let isOpened = false;

    // const openModal = () => {
    //     modal.classList.add("is-open");
    //     body.style.overflow = "hidden";
    // };

    // const closeModal = () => {
    //     modal.classList.remove("is-open");
    //     body.style.overflow = "initial";
    // };

    // window.addEventListener("scroll", () => {
    //     if (window.scrollY > window.innerHeight / 3 && !isOpened) {
    //         isOpened = true;
    //         scrollDown.style.display = "none";
    //         openModal();
    //     }
    // });

    // modalButton.addEventListener("click", openModal);
    // closeButton.addEventListener("click", closeModal);

    // document.onkeydown = evt => {
    //     evt = evt || window.event;
    //     evt.keyCode === 27 ? closeModal() : false;
    // };
</script>
