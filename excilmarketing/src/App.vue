<template>
  <div>
    <div
      class="grid grid-cols-2 py-2 lg:py-5 px-5 lg:px-7 fixed text-lg w-full font-normal topnavt"
      :class="{
        'bg-white z-10 text-black font-semibold': scrollPosition > 10,
      }"
    >
      <router-link to="/" class="flex items-center"
        ><svg
          xmlns="http://www.w3.org/2000/svg"
          class="mr-2 fill-white"
          width="56.228"
          height="28.198"
          viewBox="0 0 56.228 28.198"
        >
          <g
            id="Group_1"
            data-name="Group 1"
            transform="translate(-520.468 -122.433)"
          >
            <path
              id="Path_1"
              data-name="Path 1"
              d="M540.368,141.053v1.912l3.563,3.56h.518l3.563-3.56v-1.912Z"
              transform="translate(4.387 4.105)"
              fill="#f25333"
            />
            <path
              id="Path_2"
              data-name="Path 2"
              d="M548.01,127.963v-1.919l-3.611-3.611h-.42l-3.611,3.611v1.919Z"
              transform="translate(4.387 0)"
              fill="#f25333"
            />
            <path
              id="Path_3"
              data-name="Path 3"
              d="M544.75,141.539a8.672,8.672,0,0,0-.947-3.118c-.07-.131-.132-.237-.194-.34-2.032-3.432-6.634-5.327-12.954-5.327a44.769,44.769,0,0,0-10.187,1.31c5.4-2.955,13.456-4.871,22.568-5.226.834-.033,3.011-.055,5.546-.055s4.713.022,5.547.055c9.113.355,17.171,2.27,22.567,5.226a44.768,44.768,0,0,0-10.187-1.31c-6.32,0-10.922,1.9-12.959,5.336-.056.093-.118.2-.181.315a8.743,8.743,0,0,0-.957,3.135Z"
              transform="translate(0 1.4)"
              fill="#f25333"
            />
          </g>
        </svg>
        <div class="hidden lg:block font-semibold text-white">
          Excil Marketing
        </div>
      </router-link>
      <div
        class="hidden lg:flex space-x-12 justify-end items-center font-semibold text-white"
      >
        <router-link to="/about">
          <div>About</div>
        </router-link>
        <router-link to="/Contact">
          <div>Contact</div>
        </router-link>

        <router-link to="/services">
          <div>Services</div>
        </router-link>
        <div @click="menu">
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="22.287"
            height="17.319"
            viewBox="0 0 22.287 17.319"
            class="cursor-pointer fill-white stroke-white"
          >
            <g
              id="Group_2"
              data-name="Group 2"
              transform="translate(-66.666 -222.66)"
            >
              <line
                id="Line_1"
                data-name="Line 1"
                x2="22.287"
                transform="translate(66.666 223.66)"
                stroke-miterlimit="10"
                stroke-width="2"
              />
              <line
                id="Line_2"
                data-name="Line 2"
                x2="22.287"
                transform="translate(66.666 231.319)"
                stroke-miterlimit="10"
                stroke-width="2"
              />
              <line
                id="Line_3"
                data-name="Line 3"
                x2="22.287"
                transform="translate(66.666 238.979)"
                stroke-miterlimit="10"
                stroke-width="2"
              />
            </g>
          </svg>
        </div>
      </div>
      <div class="flex lg:hidden items-center justify-end">
        <svg
          @click="menu"
          class="cursor-pointer"
          xmlns="http://www.w3.org/2000/svg"
          width="22.287"
          height="17.319"
          viewBox="0 0 22.287 17.319"
        >
          <g
            id="Group_2"
            data-name="Group 2"
            transform="translate(-66.666 -222.66)"
          >
            <line
              id="Line_1"
              data-name="Line 1"
              x2="22.287"
              transform="translate(66.666 223.66)"
              fill="#ec4119"
              stroke="#ec4119"
              stroke-miterlimit="10"
              stroke-width="2"
            />
            <line
              id="Line_2"
              data-name="Line 2"
              x2="22.287"
              transform="translate(66.666 231.319)"
              fill="#ec4119"
              stroke="#ec4119"
              stroke-miterlimit="10"
              stroke-width="2"
            />
            <line
              id="Line_3"
              data-name="Line 3"
              x2="22.287"
              transform="translate(66.666 238.979)"
              fill="#ec4119"
              stroke="#ec4119"
              stroke-miterlimit="10"
              stroke-width="2"
            />
          </g>
        </svg>
      </div>
    </div>
    <transition name="bounce">
      <Menu v-show="ishidden" :clicked="menu" class="z-50" />
    </transition>
    <router-view />
    <Footerdiv />
  </div>
</template>

<script>
import Footerdiv from "./components/Footerdiv.vue";
import Menu from "./components/Menu.vue";
export default {
  name: "home",
  components: {
    Footerdiv,
    Menu,
  },
  data() {
    return {
      ishidden: false,
      call: 100,
      $route: {
        fullPath: "",
      },
      hiden: true,
      scrollPosition: null,
    };
  },
  methods: {
    scrolltop() {
      this.hiden = true;
      this.scrollPosition = window.scrollY;
      setTimeout(() => (this.hiden = false), 10000);
    },
    menu() {
      this.ishidden = !this.ishidden;
    },
  },
  mounted() {
    window.addEventListener("scroll", this.scrolltop);
  },
};
</script>
<style>
@import url("./assets/css/style.scss");
@import url("./assets/css/style.css");
</style>
