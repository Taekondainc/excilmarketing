<template>
  <div>
    
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
      <div class="columncreate2">
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
                v-bind:src="'data:image/png/jpeg/jpg;base64,' + res.eventfile"
                id="imgbusines"
                 
              />
            </div>
            <div>
              <div id="textprod">
                <div>
                  <b>Title</b>:
                  <div>{{ res.eventtitle }}</div>
                </div>

                <div>
                  <div>{{ res.description }}</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
import axios from "axios";
export default {
  data() {
    return {
      company: "",
      product: "",
      FILE: null,
      description: "",
      category: "",
    
      nbr: "",
      result: "",
      key: "",
      src: "",  rotate: false,
      preview: false,
      results: [],
    };
  },
  created() {
    axios
      .post("https://excilmarketing.com/campbell/public/api/viewEvents")
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
    },close() {
      this.preview =false;
       
    },
    getvalue() {
      axios
        .post("https://excilmarketing.com/campbell/public/api/searchEvents", {
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
