<template>
  <div id="torso">
    <div class="banner2">Aim</div>
    <hr id="shortline" />
    <div id="wrapperdiv" ref="target"  >
      <h1 class="h1aim">
        Our vision is that Excil Marketing will be the safest place to work in
        the Guyana onshore , offshore oil & gas industry. To achieve this we
        must all work together and take personal safety of our selves and other.
      </h1>
      <transition  name="custom-classes-transition"
    enter-active-class="animated tada"
    leave-active-class="animated bounceOutRight" appear>
        <div id="a-boxes" v-show="appear">
          <li>
            1. Acting in a safe and responsible manner
          </li>
        </div></transition
      >
<transition  name="custom-classes-transition"
    enter-active-class="animated tada"
    leave-active-class="animated bounceOutRight" appear>
      <div id="a-boxes" v-show="appear"> 
        <li>
          2. Leading by example and promotion trust
        </li>
      </div></transition>
<transition  name="custom-classes-transition"
    enter-active-class="animated tada"
    leave-active-class="animated bounceOutRight" appear>

      <div id="a-boxes" v-show="appear">
        <li>
          3. Expanding our business conditions
        </li>
      </div></transition>
      <transition  name="custom-classes-transition"
    enter-active-class="animated tada"
    leave-active-class="animated bounceOutRight" appear>
      <div id="a-boxes" v-show="appear">
        <li>
          4. Define and respond to customer expectations
        </li>
      </div></transition>
      <transition  name="custom-classes-transition"
    enter-active-class="animated tada"
    leave-active-class="animated bounceOutRight" appear>
      <div id="a-boxes" v-show="appear">
        <li>
          5. Adapt to marketing opportunities
        </li>
      </div></transition>
      <transition  name="custom-classes-transition"
    enter-active-class="animated tada"
    leave-active-class="animated bounceOutRight" appear>
      <div id="a-boxes" v-show="appear">
        <li>
          6. We will strive to ensure that the company's work force is
          adequately trained and equipped to under take the tasks required while
          ensuring that the continuous development needs of our employees are
          met.
        </li>
      </div></transition>
<transition  name="custom-classes-transition"
    enter-active-class="animated tada"
    leave-active-class="animated bounceOutRight" appear>
      <div id="a-boxes" v-show="appear">
        <li>
          7. Manager's and supervisors will regularly appraise the performance
          of their team members versus agreed-upon objectives and provide to
          them constructive feedback as a means of ensuring the goals of the
          company are met.
        </li>
      </div></transition>
<transition  name="custom-classes-transition"
    enter-active-class="animated tada"
    leave-active-class="animated bounceOutRight" appear>
      <div id="a-boxes" v-show="appear">
        <li>
          8. Our desire is simple. To make excil marketing rewarding and
          enjoyable place to work. Making our people the cornerstone of our
          organization.
        </li>
      </div></transition>
<transition  name="custom-classes-transition"
    enter-active-class="animated tada"
    leave-active-class="animated bounceOutRight" appear>
      <div id="a-boxes" v-show="appear">
        <li>
          9. Assured training , development and job satisfaction will constantly
          be a priority of the excil marketing core values.
        </li>
      </div></transition>
    </div>
  </div>
</template>

<script>
export default { mounted() {
  this.listener = () => {
      const rect = this.$refs.target.getBoundingClientRect()
      const top = window.innerHeight - rect.top
      this.appear = top > 0
    }
    window.addEventListener('scroll', this.listener)
  },
  created() {
    window.addEventListener("scroll", this.handleScroll);
  },
  destroyed() {
    window.removeEventListener("scroll", this.handleScroll);
  },
  data() {
    return {
      appear: false,
    };
  },
  methods: {
    onScroll({ target: { scrollTop, clientHeight, scrollHeight } }) {
      if (scrollTop + clientHeight <= scrollHeight) {
        this.appear = true;
      }
    },
    handleScroll(event) {
      this.appear;
    },
  },
};
</script>

<style></style>
