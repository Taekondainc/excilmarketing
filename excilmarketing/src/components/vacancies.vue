<template>
  <div class="cvb">
    <div class="justdiv" style="padding-top: 4rem">
      <input
        type="search"
        name="search"
        id="search"
        v-model="key"
        @keyup="getvalue"
        placeholder="Search By Job Title"
      />
    </div>
    <div class="jdiv">
      <div class="jlist" v-for="job in jobs" :key="job.id">
        <div class="jpreview">
          <div class="img">
            <div v-if="job.logo == ''">
              <img
                src="https://res.cloudinary.com/excil-marketing/image/upload/v1622605877/excil/company-default-4549373b79625823b56e48c7918608f77be903ad2fd38cfc9b6929d095994013_fgspgv.png"
                width="100%"
              />
            </div>
            <div v-else>
              <img
                :src="'data:image/png/jpeg/jpg;base64,' + job.logo"
                width="30%"
              />
            </div>
          </div>
          <div class="content float-left">
            <h4>Company: {{ job.company }}</h4>
            <h4>Job Title: {{ job.jobtitle }}</h4>
            <h4>Category: {{ job.jobtype }}</h4>

            <router-link :to="{ path: '/Preview/' + job.id }" class="btn">View More</router-link>
            <router-link
              color="success"
              class="btn-apply"
              @click="$router.push('/apply/' + job.id + '/' + job.jobtitle)"
              >Apply</a
            >
          </div>
        </div>
      </div>
    </div>
    <div class="crjob" @click="$router.push('/Create')">
      <i class="fa fa-plus" aria-hidden="true"></i>
      <div>Add Job</div>
    </div>
  </div>
</template>

<script>
import axios from "axios";
export default {
  data() {
    return {
      FILE: "",
      company: "",
      jttitle: "",
      desccompany: "",
      loccompany: "",
      contact: "",
      jobtype: "",
      catcompany: "",
      jobs: [],
      key: "",
    };
  },

  created() {
    axios
      .post("https://excilmarketing.com/campbell/public/api/joblisting")
      .then((res) => {
        this.jobs = res.data;
      })
      .catch();
  },
  methods: {
    getvalue() {
      axios
        .post(
          "https://excilmarketing.com/campbell/public/api/joblistingsearch",
          {
            key: this.key,
          }
        )
        .then((res) => {
          this.jobs = res.data;
        })
        .catch();
    },
  },
};
</script>

<style scoped>
@import url("https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Oswald:wght@300;400;500;600&display=swap");
@import url("https://fonts.googleapis.com/css2?family=Cedarville+Cursive&display=swap");
@import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap");

.jdiv {
  padding: 2rem;
  display: grid;
  grid-template-columns: auto auto auto;

  font-family: "Poppins", sans-serif;
}
.jlist {
  background-color: rgb(236, 236, 236);
  color: rgb(0, 0, 0);
  margin: 0.4rem;
}
.img {
  padding: 1rem;
}
.cvb {
  background: #f5f5f5;
}
.crjob {
  position: sticky;
  border-radius: 5px;
  cursor: pointer;
  bottom: 50px;
  color: aliceblue;
  padding: 15px;
  font-family: "Poppins", sans-serif;
  text-align: center;
  float: right;
  background: #f15a24;
  right: 60px;
  display: grid;
  justify-content: center;
  align-items: center;
}
.content {
  text-transform: capitalize;
}
.jpreview {
  display: grid;
  grid-template-columns: auto auto;
  list-style: none;
  font-size: 0.9rem;
  padding: 1rem;
  border: 0.3 solid rgb(167, 166, 166);
  justify-content: center;
  vertical-align: middle;
}
.btn {
  border: 2px solid lightslategray;
  color: rgb(99, 99, 99);
  font-weight: 600;
  border-radius: 3px;
  margin: 2px;
  text-decoration: none;
  padding: 10px;
}
.btn-apply {
  border: 2px solid lightslategray;
  color: rgb(99, 99, 99);
  font-weight: 600;
  border-radius: 3px;
  margin: 2px;
  text-decoration: none;
  padding: 10px;
}
.btn:hover {
  border: 2px solid lightslategray;
  background: lightslategray;
  color: rgb(255, 255, 255);
  border-radius: 3px;
  margin: 2px;
  text-decoration: none;
  padding: 10px;
}

.btn-apply:hover {
  border: 2px solid lightslategray;
  background: rgb(232, 243, 253);
  color: rgb(255, 255, 255);
  border-radius: 3px;
  margin: 2px;
  text-decoration: none;
  padding: 10px;
}
@media only screen and (max-width: 1000px) and (min-width: 0px) {
  .jdiv {
    padding: 0.1rem;
    display: grid;
    grid-template-columns: 50% 50%;
    grid-gap: 5px;

    font-family: "Poppins", sans-serif;
  }
  .jpreview {
    display: grid;
    grid-template-columns: auto;
    list-style: none;
    font-size: 0.9rem;
    padding: 0.6rem;
    justify-content: center;
    vertical-align: middle;
  }
  .btn {
    font-size: 0.6rem;
    margin: 0.5px;
    padding: 0.4rem;
  }
  .btn-apply {
    font-size: 0.6rem;
    margin: 0.5px;
    padding: 0.4rem;
  }
  .crjob {
    position: sticky;
    border-radius: 5px;
    cursor: pointer;
    bottom: 20px;
    color: aliceblue;
    padding: 15px;
    font-family: "Poppins", sans-serif;
    text-align: center;
    float: right;
    background: #f15a24;
    right: 30px;
    display: grid;
    justify-content: center;
    align-items: center;
  }
}
</style>
