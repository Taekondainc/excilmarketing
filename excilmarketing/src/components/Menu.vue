<template>
  <div class="yellow">
    <div class="flex items-center justify-center" @click="menu2">
      <svg
        xmlns="http://www.w3.org/2000/svg"
        class="w-20 cursor-pointer"
        viewBox="0 0 29.25 22.486"
      >
        <g
          id="Icon_ionic-ios-exit"
          data-name="Icon ionic-ios-exit"
          transform="translate(-3.375 -6.75)"
        >
          <path
            id="Path_2161"
            data-name="Path 2161"
            d="M10.125,9.563v7.523H22.774l-3.319-3.368a.915.915,0,1,1,1.3-1.287l4.852,4.922a.929.929,0,0,1,.26.64.872.872,0,0,1-.07.352.977.977,0,0,1-.19.288h0l-4.852,4.922a.915.915,0,1,1-1.3-1.287L22.774,18.9H10.125v7.523a2.821,2.821,0,0,0,2.813,2.813H29.813a2.821,2.821,0,0,0,2.813-2.812V9.563A2.821,2.821,0,0,0,29.813,6.75H12.938A2.821,2.821,0,0,0,10.125,9.563Z"
            fill="#0a1522"
          />
          <path
            id="Path_2162"
            data-name="Path 2162"
            d="M4.289,17.086a.914.914,0,0,0,0,1.828h5.836V17.086Z"
            fill="#0a1522"
          />
        </g>
      </svg>
    </div>
    <div class="menulock">
      <div id="menucontainer">
        <div id="ahref" @click="menu2">
          <router-link to="/">
            <div id="footerlink2">Home</div>
          </router-link>
        </div>
        <div id="ahref" @click="menu2">
          <router-link to="/Products">
            <div id="footerlink2">Products</div>
          </router-link>
        </div>
        <div id="ahref" @click="menu2">
          <router-link to="/Projects">
            <div id="footerlink2">Projects</div>
          </router-link>
        </div>
        <div id="ahref" @click="menu2">
          <router-link to="/About">
            <div id="footerlink2">About Us</div>
          </router-link>
        </div>
        <div id="ahref" @click="menu2">
          <router-link to="/Services">
            <div id="footerlink2">Services</div>
          </router-link>
        </div>
        <div id="ahref" @click="menu2">
          <router-link to="/CreateAppointment">
            <div id="footerlink2">Create Appointment</div>
          </router-link>
        </div>
        <div id="ahref" @click="menu2">
          <router-link to="/Contact">
            <div id="footerlink2">Contact</div>
          </router-link>
        </div>
        <div id="ahref" @click="menu2">
          <router-link to="/Events">
            <div id="footerlink2">Events</div>
          </router-link>
        </div>
        <div id="ahref" @click="menu2">
          <router-link to="/Vacancies">
            <div id="footerlink2">Vacancies</div>
          </router-link>
        </div>
        <div id="ahref" @click="menu2">
          <router-link to="/Create">
            <div id="footerlink2">Post Vacancy</div>
          </router-link>
        </div>
        <div id="ahref" @click="menu2">
          <router-link to="/Login">
            <div id="footerlink2">Login</div>
          </router-link>
        </div>
        <div id="ahref" @click="menu3">
          <router-link to="/Privacy">
            <div id="footerlink2">Privacy Policy</div>
          </router-link>
        </div>
      </div>
    </div>
    <div id="menudrag">
      <div id="iconmiddle" style="letter-spacing: 1.5px">
        <img
          src="https://res.cloudinary.com/excil-marketing/image/upload/v1604632333/excil/loation_hmpg2s.png"
          alt=""
          id="footericons2"
        />
        <div>112 blue berry hill Wismar linden</div>
      </div>
      <div id="iconmiddle" style="letter-spacing: 1.5px">
        <a href="tel:+592-668-8421">
          <img
            src="https://res.cloudinary.com/excil-marketing/image/upload/v1604632333/excil/phone_yqmd5x.png"
            alt=""
            id="footericons2"
          />
          <div>592-668-8421</div>
        </a>
      </div>
      <div id="iconmiddle" style="letter-spacing: 1.5px">
        <img
          src="https://res.cloudinary.com/excil-marketing/image/upload/v1604632333/excil/mail_tzoibi.png"
          alt=""
          id="footericons2"
        />
        <div>Operationexmarketing@gmail.com</div>
        <div>ceo@navalsub.com</div>
      </div>
    </div>

    <hr id="bordhr2" />

    <div id="divgetdown">
      <div class="banner4">
        <img
          src="https://res.cloudinary.com/excil-marketing/image/upload/v1604813570/excil/gg2Asset_1_wqinfq.png"
          id="footerimg"
        />
        EM&#169;
      </div>
      <div class="banner5">made by TaekondaInc &#169;</div>
    </div>
  </div>
</template>

<script>
export default {
  props: ["clicked"],
  methods: {
    menu2() {
      this.clicked();
    },
    menu3() {
      this.clicked();
    },
  },
};
</script>
