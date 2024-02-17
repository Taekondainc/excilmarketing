<template>
    <div>
      <div style="text-align:center;padding-top:2rem;">   <v-btn class="btn-apply"  @click="$router.go(-1)">Back</v-btn></div>
<div v-for="job in jobs" :key="job.id">  
	 <h4 class="co">Category: {{job.jobtype}} <br> Date: {{job.created_at.slice(0,10)}} </h4>
<div class="jpreview">
        <div class="img">
			<div v-if="job.logo==''">
				<img src="https://res.cloudinary.com/excil-marketing/image/upload/v1622605877/excil/company-default-4549373b79625823b56e48c7918608f77be903ad2fd38cfc9b6929d095994013_fgspgv.png" 
				width="100%">
				</div>
				<div v-else><img :src="'data:image/png/jpeg/jpg;base64,'+ job.logo" width="30%"></div>
			</div>  <div class="content float-left">
            <h4 >Company: {{ job.company }}</h4>
            <h4 >Job Title: {{ job.jobtitle }}</h4>
            
         	<h4 class="company">description: {{job.description}} </h4>
                <h4 class="company">Location: {{job.location}}</h4>
                <h4 class="company">Contact: {{job.contact}}</h4>
             
                
         
          <v-btn
            color="success"
            class=" btn-apply" @click="$router.push('/apply/'+job.id+'/'+job.jobtitle)"
            >Apply</v-btn
          > </div>
        </div>

							
			
    
    
     
   
     
    
    
						</div>
						
			
    </div>
</template>

<script>
import axios from "axios";
export default {
  props: ["id"],
  data() {
    return {
      jobs: ""
    };
  },

  created() {
    axios
      .post("https://excilmarketing.com/campbell/public/api/jobget", {
        id: this.id
      })
      .then(res => {
        this.jobs = res.data;
      })
      .catch();
  }
};
</script>
<style scoped>
@import url("https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Oswald:wght@300;400;500;600&display=swap");
@import url("https://fonts.googleapis.com/css2?family=Cedarville+Cursive&display=swap");
@import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

.jdiv{color: aliceblue;
	padding:2rem;
	display: grid;grid-template-columns: auto auto auto;
	 
font-family: 'Poppins', sans-serif;
}
.jlist{
	background-color: rgb(236, 236, 236);
	color:rgb(248, 246, 246);
	margin:0.4rem;
}.co{padding: 2rem;
	color: aliceblue;
		text-transform: capitalize;
}
.img{
	padding:1rem;
}
.content{color: aliceblue;vertical-align: middle;
	text-transform: capitalize;
}
.jpreview{display: grid;grid-template-columns: auto auto;
	list-style: none;
	font-size: 1.1rem;
	padding: 1rem;
	justify-content: center;
	vertical-align: middle;
}.btn{
	border:2px solid rgb(255, 255, 255);
	color: rgb(255, 255, 255);
	font-weight: 600;
	border-radius: 3px;margin: 2px;
	text-decoration: none;padding:10px;
}.btn-apply{
	border:2px solid rgb(255, 255, 255);
	color: rgb(255, 255, 255);
	font-weight: 600;border:2px solid rgb(34, 91, 148);;
	background: rgb(34, 91, 148);
	border-radius: 3px;margin: 2px;
	text-decoration: none;padding:10px;
}
.btn:hover{
	border:2px solid rgb(34, 91, 148);;
	background: rgb(34, 91, 148);
	color: rgb(255, 255, 255);
	border-radius: 3px;margin: 2px;
	text-decoration: none;padding:10px;
}

.btn-apply:hover{
	border:2px solid rgb(34, 91, 148);;
	background: rgb(34, 91, 148);;
	color: rgb(255, 255, 255);
	border-radius: 3px;margin: 2px;cursor: pointer;
	text-decoration: none;padding:10px;
}@media only screen and (max-width: 1000px) and (min-width: 0px) {
	.jpreview{
	 
	display: grid;grid-template-columns: auto  ;
	}}
</style>