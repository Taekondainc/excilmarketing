<template>
  <div class="messagespage">
    <h1>Messages</h1>
    <div class="columncreate3">
      <div v-for="datas in data" :key="datas.key" class="justdiv2">
        <div id="textprod2">
          <div>Name: {{ datas.name }}</div>
          <div>
            Email:
            <router-link :href="'mailto:' + datas.email">{{
              datas.email
            }}</router-link>
          </div>
          <div>{{ datas.description }}</div>
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
      data: "",
    };
  },
  created() {
    axios
      .post("https://excilmarketing.com/campbell/public/api/Messages")
      .then((res) => {
        this.data = res.data;
      });
  },
};
</script>
