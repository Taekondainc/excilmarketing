<template
  ><div>
    <div class="crtapp">
      <div class="c2">
        <h1 class="banner15">Create Appointments</h1>
        <router-linkrticle>
          Make all your appointments through one click with our online calendar.
          This helps you, our clients connect Anywhere and Anytime with us that
          fits your Schedule.
        </article>
      </div>
      <div class="centerimgapp">
        <img
          src="https://res.cloudinary.com/excil-marketing/image/upload/v1618636178/excil/gyAsset_2_ircict.png"
          alt=""
          id="servicesimg3"
        />
      </div>
    </div>
     
    <div class="creatapp">
      <FullCalendar
        :slotLabelFormat="{ hour12: false, hour: '2-digit', minute: '2-digit' }"
        :options="calendarOptions" ref="fullCalendar"
      />
      <div class="c3">
        <h1>Create Appointment</h1>
                  <div>{{info}}</div>
                  <div>

<h3 id="instruct"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
width="64" height="64"
viewBox="0 0 172 172"
style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#f1c40f"><path d="M85.61157,8.12024c-20.0165,0.10629 -38.88214,7.59271 -53.49542,21.57611c-15.45312,14.78125 -24.05365,34.80365 -24.05365,56.30365c0,17.06562 5.37395,33.32553 15.72083,46.8974c1.34375,1.74687 3.89845,2.14947 5.64532,0.80572c1.74687,-1.34375 2.14947,-3.89583 0.80572,-5.6427c-9.27188,-12.22812 -14.10937,-26.74167 -14.10937,-42.06042c0,-19.21563 7.65885,-37.22135 21.63385,-50.52447c13.975,-13.30312 32.25053,-20.1573 51.60053,-19.21668c35.87812,1.6125 65.0375,31.04168 66.51563,66.9198c1.20937,29.42813 -16.2599,56.5724 -43.53803,67.72552c-2.01562,0.80625 -3.08957,3.2229 -2.28332,5.23853c0.67188,1.6125 2.14843,2.55365 3.76093,2.55365c0.5375,0 1.0771,-0.13333 1.48022,-0.2677c30.36875,-12.49687 49.85208,-42.86667 48.6427,-75.65417c-1.74687,-40.04375 -34.26667,-72.83125 -74.31042,-74.57812c-1.34375,-0.05879 -2.68107,-0.0832 -4.0155,-0.07611zM86,40.3125c-6.67919,0 -12.09375,5.41456 -12.09375,12.09375c0,6.67919 5.41456,12.09375 12.09375,12.09375c6.67919,0 12.09375,-5.41456 12.09375,-12.09375c0,-6.67919 -5.41456,-12.09375 -12.09375,-12.09375zM86,79.28125c-6.71875,0 -12.09375,5.375 -12.09375,12.09375v32.25c0,6.71875 5.375,12.09375 12.09375,12.09375c6.71875,0 12.09375,-5.375 12.09375,-12.09375v-32.25c0,-6.71875 -5.375,-12.09375 -12.09375,-12.09375zM44.50385,143.22748c-1.28601,-0.01181 -2.54578,0.58789 -3.38562,1.76367c-1.20938,1.88125 -0.8052,4.29895 1.07605,5.6427c4.3,2.6875 8.7349,5.1073 13.30365,7.12292c0.5375,0.26875 1.07395,0.2677 1.61145,0.2677c1.6125,0 3.09167,-0.93905 3.76355,-2.41718c0.80625,-2.01562 -0.13647,-4.4349 -2.1521,-5.24115c-4.16563,-1.74687 -8.19478,-3.89792 -11.95728,-6.45105c-0.70547,-0.45352 -1.4881,-0.68054 -2.2597,-0.68762z"></path></g></g></svg>
Instructions</h3>
<ul>
  <li>click calendar date to get date </li>
  <li>click Time to set Appointment Time</li>
  <li>Enter Information about yourself</li>
  <li>save or press cancel to clear form</li>
</ul>
                  </div>
     <!---   <div v-for="event in calendarOptions.events" :key="event.id">
         <div>{{event.start }}</div> <div>{{event.end }}</div> </div>-->
        <div v-show="modalhidden">
        
          <div><h1>Date Selected: {{checker}}</h1></div>
         <div> <input type="text" name="" v-model="titled" id="appid"  placeholder="Name" required/></div>
          <div> <input type="text" name="" v-model="numbers" id="appid" placeholder="Phone Number"  required/></div>
           <div> <textarea name=""   v-model="descriptions" id="appid" cols="30" rows="10" placeholder="Description" required></textarea></div>
          <div><button id="appidg" @click="hideb(arg)">Create Appointment</button>
          <button id="appidr" @click="hidebar(arg)">Close</button></div>

        </div>
      </div>
    </div>
  </div>
</template>
<script>
import FullCalendar, { Calendar } from "@fullcalendar/vue";
import dayGridPlugin from "@fullcalendar/daygrid";
import timeGridPlugin from "@fullcalendar/timegrid";
import interactionPlugin  from "@fullcalendar/interaction";
import axios from 'axios';

export default {
  components: {
    FullCalendar, // make the <FullCalendar> tag available
  },
  data() {
    return {
      num: 0,
      titled: "",
      Description:"",
      entitynumber:" ",
      descriptions:"",
      numbers:"",

      title: "",info:"",
      checker: false,
      modalhidden: false,
      pasre: null,
      arg: null,
      calendarOptions: {
        plugins: [
          dayGridPlugin,
          timeGridPlugin,
          interactionPlugin, // needed for dateClick
        ],
        timeZone: "UTC",
        titleFormat: {
          month: "long",
          year: "numeric",
          day: "numeric",
        }, 
        headerToolbar: {
          left: "prev,next today",
          center: "title",
          right: "dayGridMonth,timeGridWeek,timeGridDay",
        }, 
        initialView: "dayGridMonth",

        selectable: true,
        editable: false,
  
        selectMirror: true,
        dayMaxEvents: true,
        dateClick: this.checked,
        
        eventsSet: this.handleEvent,
        eventClick: this.clicked ,
        events: [],
      },
    };
  },
  created() {
 axios.post("https://excilmarketing.com/campbell/public/api/appointments").then(res=>{this.calendarOptions.events=res.data});

   // if (this.events == "") {
      //end()

   // } else {
      //     this.calendarOptions.events.push();
   // }
  },
  methods: {   handleEvents(events) {
      this.handleEventClick();
    },clicked(){
      //  console.log(this.calendarOptions.events);
    },
    hidebar(arg) {
      this.modalhidden = !this.modalhidden;
this.titled = "";this.numbers=""; this.descriptions="";
      
     this.entitynumber=this.numbers;

      //this.calendarOptions.events.splice(arg, 1);
     // console.log(this.calendarOptions.events);
    },
    handleEventClick(clickInfo) {
      //  if (confirm(`Are you sure you want to delete the event '${clickInfo.event.title}'`)) {
if (clickInfo.editable=="nonedit") {
  alert(clickInfo);
} else {
  

      this.calendarOptions.events.splice(clickInfo, 1);
     // console.log(this.calendarOptions.events);
     }
      // }
    },gettime(info){
      // console.log(this.modalhidden);
  this.modalhidden = true;
     
    },
    checked(arg) {  const calendarApi = this.$refs.fullCalendar.getApi();
calendarApi.changeView("timeGridDay");
calendarApi.gotoDate(arg.dateStr);
  // Calendar('changeView','timeGridDay');
  //  FullCalendar('gotoDate',arg.dateStr) ;
      this.modalhidden =true;
      // var T=getTime();
      this.checker = arg.dateStr;
      //console.log(this.checker); 
      
    },
    hideb() {
      this.title = this.titled;
     this.description= this.descriptions;
      
     this.entitynumber=this.numbers;
      this.modalhidden = false;
      this.handleDateClick(this.checker);
    } ,
    handleDateClick: function(arg,click) {
      this.pasre = arg;
      //console.log(this.calendarOptions.events);
      //  this.call.push(arg.dateStr);
      const date = arg;
      // var titles = this.title;
      //this.calendarOptions.events.push({title:"lol", start:this.date });
      this.calendarOptions.events.push({
        id: ++this.num,
        title: this.title,
        start: date,
        end:date
      }); 
      axios.post("https://excilmarketing.com/campbell/public/api/createapp",{
        "title":this.title,
        "start":date,
        "end":date,
        "description":this.description,
        "number":this.entitynumber,
        "editable":"false"

      }).then(res=>{this.info=res.data});
      //this.calendarOptions.events=[...this.calendarOptions.events ];

     // console.log(this.calendarOptions.events);
      this.titled = "";this.numbers=""; this.descriptions="";
      
     this.entitynumber=this.numbers;
      this.modalhidden = false;
    },
  },
};
</script>

<style>.fc-direction-ltr .fc-daygrid-event .fc-event-time {
    margin: 0 !important;display: none;
  }
.fc-col-header {
  width: 100% !important;
}
.fc-scrollgrid-sync-table {
  width: 100% !important;
  height: 100% !important;
}
.fc-daygrid-body {
  width: 100% !important;
  height: 100% !important;
}
.fc .fc-scrollgrid-liquid {
    height: 100% !important;
}.fc-theme-standard .fc-scrollgrid {
     border: 1px solid #f15a24;
}.fc-theme-standard td, .fc-theme-standard th {
    border: 1px solid #f15a24;
    color: antiquewhite;
}
.fc-theme-standard td, .fc-theme-standard th {
    border: 1px solid #f15a24;}.fc .fc-button {
  background-color: #f15a24;}

 
.fc .fc-scroller-liquid-absolute::-webkit-scrollbar-track
{
	-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
	border-radius: 10px; 
	background-color: #F5F5F5;
}
.fc-daygrid-day{
  color: #F5F5F5;
}
.fc .fc-scroller-liquid-absolute::-webkit-scrollbar
{
	width: 12px;
	background-color: #F5F5F5;
}

input, button{
  cursor: pointer;
}

.fc .fc-scroller-liquid-absolute::-webkit-scrollbar-thumb
{
	border-radius: 10px;
	-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
	background-color: #f15a24 ; 
}#instruct{
color: yellow;
}ul li{
  
color: yellow;
}
#instruct{
   vertical-align: middle;
}
#appid{
  background-color: transparent;font-size: 0.8rem;
  padding: 0.5rem;width:50%;margin:10px;border:0.78px solid #a8a5a3 ;
  border-radius:3px;color: #faf6f4;
}#appidg{
  background-color: rgb(113, 219, 113);
  padding: 0.5rem;width:30%;margin:10px;border:0.78px solid #a8a5a3 ;
  border-radius:3px;color: #a8a5a3;color: rgb(0, 0, 0) !important;
  -webkit-text-stroke: 0.5px #000000;letter-spacing: 2px;
}#appidr{
  background-color: rgb(235, 81, 81);
  padding: 0.5rem;width:30%;margin:10px;border:0.78px solid #a8a5a3 ;
  border-radius:3px;color: #000000 !important;
  -webkit-text-stroke: 0.5px #000000;letter-spacing: 2px;
}
.creatapp {
  background-color:#000000c0;color:  white !important;
  padding: 3rem;
  padding-left: 20px;
  padding-right: 20px;
  height: 100vh;
  display: grid;
  grid-template-columns: 45% 45%;
  grid-gap: 4rem;
  justify-content: center;align-content: center;
  vertical-align: middle;
}
.crtapp {
  display: grid;
  grid-template-columns: 50% 50%;
  grid-gap: 20px;
  padding: 4rem;
  align-content: center;
  vertical-align: middle;
  justify-content: center;
  color: #fffe;
}
.centerimgapp {
  display: flex;
  justify-content: center;
}@media only screen and (max-width: 1000px) and (min-width: 0px) {
  .fc-direction-ltr .fc-daygrid-event .fc-event-time {
    margin: 0 !important;display: none;
  }
  .crtapp {
    grid-template-columns: auto;
   padding: 1rem;
    padding-top: 1rem;
    padding-bottom: 2rem;
    height: 100vh;
  }.fc{
    height: 100vh;
    padding:10px;
  }.creatapp {
    background-color: #000000c0;
    color: white !important;
     padding: unset;
     padding-left: unset; 
    padding-right: unsetx; 
    height: unset; 
    display: grid;
    grid-template-columns: auto; 
    grid-gap: 4rem;
    justify-content: center;
    align-content: center;
    vertical-align: middle;
}.fc .fc-toolbar-title {
        font-size: 0.75em;
    margin: 0;
}.fc .fc-button .fc-icon {
    vertical-align: middle;
    font-size: 0.5em;
}.fc-today-button{
  display: none !important;
}.centerimgapp{
  grid-row: 1;
}.c2{
  grid-row: 2;
}.c3{
  padding: 1rem;
}#appid{
  width:80%;
}#appidg {width:unset; }.fc .fc-button{
 padding: 0.5rem !important;
    border-radius: 2px;
    font-size: 0.6rem;
    letter-spacing: 0.05rem;
}

#appidr {width:unset; }
.banner15{
  line-height: 2rem;
}
}
</style>