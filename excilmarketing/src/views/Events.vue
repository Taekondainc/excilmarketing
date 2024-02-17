<template>
  <div>
    <div class="intropagre">
      <div id="cintrodiv">
        <h1 class="banner8">
          Events
          <hr id="shortline3" />
          <div id="h1servicediv" style="padding-right: 20px">
            Scroll down to view events. These events are comprised of charitable
            activities, Services and Developments that Excil Marketing tasks
            itself with making an impact to Guyana.
          </div>
        </h1>
      </div>
      <div>
        <img
          src="https://res.cloudinary.com/excil-marketing/image/upload/v1605932008/excil/gg2m35Asset_2_in18sj.png"
          width="100%"
        />
      </div>
      <div id="logocont">
        <router-link to="/">
          <img
            src="https://res.cloudinary.com/excil-marketing/image/upload/v1604813570/excil/gg2Asset_1_wqinfq.png"
          />
        </router-link>
      </div>
    </div>

    <div><h1 id="cursive" style="letter-spacing: 2px">E V E N T S</h1></div>

    <div><Eventspage /></div>
  </div>
</template>

<script>
import Eventspage from "../components/Eventspage";
export default {
  components: {
    Eventspage,
  },
};
</script>

<style scoped>
@media only screen and (max-width: 1000px) and (min-width: 0px) {
  .intropagre {
    display: block;
    padding: 0px;
    height: 100vh;
  }
}
</style>
