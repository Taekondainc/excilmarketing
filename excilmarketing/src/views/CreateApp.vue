<template>
  <div>
    <div v-show="modalhidden">
      <h1>Name of Entity</h1>
      <input type="text" name="" v-model="titled" />
      <button @click="hideb(arg)">Create Appointment</button
      ><button @click="hidebar(arg)">Cancel</button>
    </div>
    <div>{{ calendarOptions.events }}</div>
    <FullCalendar
      :slotLabelFormat="{ hour12: false, hour: '2-digit', minute: '2-digit' }"
      :options="calendarOptions"
    />
  </div>
</template>

<script>
import FullCalendar from "@fullcalendar/vue";
import dayGridPlugin from "@fullcalendar/daygrid";
import timeGridPlugin from "@fullcalendar/timegrid";
import interactionPlugin from "@fullcalendar/interaction";

export default {
  components: {
    FullCalendar, // make the <FullCalendar> tag available
  },
  data() {
    return {
      num: 0,
      titled: "",
      title: "",
      checker: false,
      modalhidden: false,
      pasre: null,
      arg: null,
      calendarOptions: {
        plugins: [
          dayGridPlugin,
          timeGridPlugin,
          interactionPlugin, // needed for dateClick
        ] ,timeZone: 'GMT-4',  titleFormat: { 
    month: 'long',
    year: 'numeric',
    day: 'numeric',
   
  },
        headerToolbar: {
          left: "prev,next today",
          center: "title",
          right: "dayGridMonth,timeGridWeek,timeGridDay",
        },
        initialView: "dayGridMonth",

        selectable: true,
        editable: true,
         
        selectMirror: true,
        dayMaxEvents: true,
        dateClick: this.checked,
        eventsSet: this.handleEvent,eventClick: this.handleEventClick,
        events: [],
      },
    };
  },
  created() {
    if (this.events == "") {
      //end()
    } else {
      //     this.calendarOptions.events.push();
    }
  },
  methods: {
    hidebar(arg) {
      this.modalhidden = !this.modalhidden;
      //this.calendarOptions.events.splice(arg, 1);
      console.log(this.calendarOptions.events);
    },
    handleEventClick(clickInfo) {
      //  if (confirm(`Are you sure you want to delete the event '${clickInfo.event.title}'`)) {

      this.calendarOptions.events.splice(clickInfo, 1);
      console.log(this.calendarOptions.events);
      // }
    },
    checked(arg) {
      this.modalhidden = !this.modalhidden;
     // var T=getTime();
      this.checker = arg.date ;
      //console.log(this.checker);
    },
    hideb() {
      this.title = this.titled;
      this.modalhidden = false;
      this.handleDateClick(this.checker);
    },
    handleDateClick: function (arg) {
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
      });
      //this.calendarOptions.events=[...this.calendarOptions.events ];

      console.log(this.calendarOptions.events);
      this.titled = ""; 
    },
  },
};
</script>
