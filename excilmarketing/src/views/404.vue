<template>
  <div>
    <div class="mainbox">
      <div class="err">4 <i class="far fa-question-circle fa-spin"></i> 4</div>

      <div class="msg">
        Maybe this page moved? Got deleted? Is hiding out in quarantine? Never
        existed in the first place?
        <p>
          Let's go <router-link class="att" href="/">home</router-link> and try
          from there.
        </p>
      </div>
    </div>
  </div>
</template>
<style scoped>
@import url("https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Oswald:wght@300;400;500;600&display=swap");
@import url("https://fonts.googleapis.com/css2?family=Cedarville+Cursive&display=swap");
.mainbox {
  background-color: transparent;
  margin: auto;

  position: relative;
  text-align: center;
  display: grid;
  align-items: center;
  padding-left: 20px;
  padding-right: 20px;
  padding-top: 20vh;
  padding-bottom: 20vh;
}

.err {
  color: #ffffff;
  font-family: "Bebas Neue", cursive;
  font-size: 13rem;
}

.far {
  color: #ffffff;
}

.err2 {
  color: #ffffff;
  font-family: "Bebas Neue", cursive;
  font-size: 11rem;
}
.att {
  color: #f15a24;
}
.msg {
  text-align: center;
  font-family: "Bebas Neue", cursive;
  font-size: 1.6rem;
  color: #ffffff;
}

a {
  text-decoration: none;
  color: white;
}

a:hover {
  text-decoration: underline;
}
@media only screen and (max-width: 1000px) and (min-width: 0px) {
  .err {
    font-size: 7rem;
  }

  .msg {
    text-align: justify;
  }
}
</style>
