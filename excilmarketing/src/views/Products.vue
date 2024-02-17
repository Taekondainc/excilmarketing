<template>
  <div style="background: #0a1522">
    <Products />
    <div>
      <div class="justdiv">
        <input
          type="search"
          name="search"
          id="search"
          v-model="key"
          @keyup="getvalue"
          placeholder="Search"
        />
      </div>
      <div class="columncreate">
        <div
          v-for="res in results"
          :key="res.id"
          class="justdiv"
          :class="{ spanall: res.showmore == true }"
        >
          <div
            class="displayproducts"
            :class="{ background: res.showmore == true }"
          >
            <div id="divh1">
              <img
                v-bind:src="'data:image/png/jpeg/jpg;base64,' + res.productfile"
                id="imgbusines"
              />
            </div>
            <div>
              <div id="textprod">
                <div>
                  <b>Company</b>:
                  <div>{{ res.company }}</div>
                </div>
                <div>
                  <b>Product Name:</b>
                  <div>{{ res.product }}</div>
                </div>
                <div v-show="res.showmore">
                  <div>
                    <b>Model:</b>
                    <div>{{ res.model }}</div>
                  </div>
                  <div>{{ res.description }}</div>
                </div>
                <button
                  @click="showmord(res)"
                  v-if="res.showmore == false"
                  id="btnshow"
                >
                  Show More
                </button>
                <button @click="showless(res)" id="btnshow" v-else>
                  Show Less
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import Products from "../components/products.vue";
import axios from "axios";
export default {
  components: {
    Products,
  },

  data() {
    return {
      company: "",
      product: "",
      FILE: null,
      description: "",
      category: "",
      nbr: "",
      result: "",
      src: "",
      rotate: false,
      preview: false,
      key: "",
      results: [],
    };
  },
  created() {
    axios
      .post("http://localhost:8000/api/getproducts")
      .then((res) => {
        res.data.forEach((item) => {
          //    if(description.id == descriptionId) {
          //    description.isVisible = !description.isVisible
          //

          item.showmore = false;
          //this get the item in the packager array
          this.results.push(item);
          console.log(item.product);
          //pust isvisble on element

          //return this.packagers.splice(this.commentsToShow, 0);
        });
      })
      .catch();
  },
  methods: {
    rotated() {
      this.rotate = true;
    },
    rotatel() {
      this.rotate = false;
    },

    copySrc(img) {
      this.preview = true;
      this.src = img.srcElement.src;
      console.log(this.src);
    },
    close() {
      this.preview = false;
    },
    getvalue() {
      axios
        .post("https://excilmarketing.com/campbell/public/api/searchproducts", {
          key: this.key,
        })
        .then((res) => {
          this.results = res.data;
        })
        .catch();
    },
    showmord(res) {
      res.showmore = !res.showmore;
    },
    showless(res) {
      res.showmore = false;
    },
  },
};
</script>
