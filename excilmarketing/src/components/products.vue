<template>
  <div class="productspage pt-16">
    <div class="grid-cols-2 grid gap-10 items-center w-full">
      <div class="">
        <div class="grid grid-cols-3 w-3/4">
          <img
            src="https://res.cloudinary.com/excil-marketing/image/upload/v1605774430/excil/gg2mAsset_2_w1bmdb.png"
            class="col-span-3"
          />

          <img
            src="https://res.cloudinary.com/excil-marketing/image/upload/v1605731835/excil/gg2mAsset_44_kgovpm.png"
            id="idmprod2"
          />

          <img
            src="https://res.cloudinary.com/excil-marketing/image/upload/v1605731835/excil/gg2mAsset_42_otw5wr.png"
            id="idmprod2"
          />

          <img
            src="https://res.cloudinary.com/excil-marketing/image/upload/v1605731835/excil/gg2mAsset_43_vjnl1q.png"
            id="idmprod2"
          />
          <router-link to="/Contact#formentry " class=""
            >Contact Us</router-link
          >
        </div>
      </div>
      <div>
        <h1 class="banner8">
          Products Page
          <hr id="shortline3" />
          <div id="h1-div2">
            Welcome to our Products page. Here we advertise the products that
            would make an impact to Guyana. This is a collaborative effort with
            stakeholders to ensure that quality service and products are
            provided to the market.
          </div>
          <div class="banner9" id="bnnr">Products Available:{{ count }}</div>
        </h1>
      </div>
    </div>
  </div>
</template>

<script>
import axios from "axios";
export default {
  data() {
    return {
      count: "",
    };
  },
  created() {
    axios
      .post("https://excilmarketing.com/campbell/public/api/getcount")
      .then((result) => {
        this.count = result.data;
      })
      .catch();
  },
};
</script>

<style lang="stylus" scoped></style>
