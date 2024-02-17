<template>
  <div>
    <div id="coverpic">
      <h1 id="h1">Contact</h1>
      <div>
        <img
          src="https://res.cloudinary.com/excil-marketing/image/upload/v1605167203/excil/extAsset_2_fwxm1z.png"
          alt=""
          id="wpwallpaper"
        />
      </div>
      <h1 id="h2">Page</h1>
      <div id="logocont">
        <router-link to="/">
          <img
            src="https://res.cloudinary.com/excil-marketing/image/upload/v1604813570/excil/gg2Asset_1_wqinfq.png"
          />
        </router-link>
      </div>
    </div>
    <div id="contcc">
      <div id="iccont">
        <img
          src="https://res.cloudinary.com/excil-marketing/image/upload/v1605080884/excil/gg2Asset_37_qo0wyp.png"
          alt=""
          id="cicon"
        />
        <div>112 blue berry hill Wismar linden</div>
      </div>
      <div id="iccont">
        <a
          >tel:+">
          <img
            src="https://res.cloudinary.com/excil-marketing/image/upload/v1605080906/excil/gg2Asset_38_dkp9og.png"
            alt=""
            id="cicon"
          />
          <div>Click to Call or Message 592-668-8421</div>
        </a>
      </div>
      <div id="iccont">
        <img
          src="https://res.cloudinary.com/excil-marketing/image/upload/v1605080942/excil/gg2Asset_39_txuwew.png"
          alt=""
          id="cicon"
        />
        <div>Operationexmarketing@gmail.com</div>
      </div>
      <div id="iccont">
        <img
          src="https://res.cloudinary.com/excil-marketing/image/upload/v1605080942/excil/gg2Asset_39_txuwew.png"
          alt=""
          id="cicon"
        />
        <div>ceo@navalsub.com</div>
      </div>
    </div>
    <div class="d-center">
      <div id="formentry">
        <form method="post" id="contactform" @submit.prevent="">
          <div v-show="responsed" class="progress">
            <div
              style="
                border: 2px solid transparent;
                position: absolute;
                left: 20%;
                right: 20%;
                border-radius: 25px;
                text-align: center;
                background: red;
                color: white;
                padding: 20px;
              "
              @click="exit"
            >
              x
              <div>close</div>
            </div>
            <br />
            <div>{{ response }}</div>
          </div>
          <h1 style="margin: 0">Contact us</h1>
          <h3 id="h1edit">Name</h3>
          <input
            type="text"
            name=""
            id=""
            placeholder="John Doe"
            v-model="name"
            required
          />
          <h3 id="h1edit">Number</h3>

          <input
            type="tel"
            name=""
            id=""
            v-model="number"
            placeholder="592-404-4444"
            pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"
            required
          />
          <h3 id="h1edit">Email</h3>
          <input
            type="email"
            name=""
            id=""
            placeholder="emailname@email.com"
            v-model="email"
            pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$"
            required
          />
          <h3 id="h1edit">Description</h3>
          <textarea
            type="text"
            name=""
            id=""
            rows="3"
            v-model="description"
            :maxlength="len"
            required
          ></textarea>
          <div id="modaltexterror" v-if="description.length > len">
            No more than 300 characters
          </div>
          <div id="modaltext" v-else-if="description.length < len">
            Keep Going
          </div>
          <div v-else></div>
          <input type="submit" id="inputbtn2" value="Send" @click="cclick" />
          <div></div>
        </form>
      </div>
      <div id="map">
        <iframe
          width="100%"
          height="100%"
          src="https://maps.google.com/maps?q=Wismar,Linden,Guyana&output=embed"
        ></iframe>
      </div>
    </div>
  </div>
</template>

<script>
import axios from "axios";
export default {
  data() {
    return {
      name: "",
      email: "",
      number: "",
      len: 300,
      description: "",
      response: "",
      responsed: false,
    };
  },
  methods: {
    exit() {
      this.responsed = false;
      this.name = "";
      this.email = "";
      this.number = "";
      this.description = "";
    },
    cclick() {
      axios
        .post("https://excilmarketing.com/campbell/public/api/message", {
          name: this.name,
          email: this.email,
          number: this.number,
          description: this.description,
        })
        .then((res) => {
          this.response = res.data;
          this.responsed = true;
        });
    },
  },
};
</script>
