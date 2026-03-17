<section class="testimonial-section section">

  <div class="container">

    <h2 class="testimonial-title">Stories of Impact</h2>
    <p class="testimonial-subtitle">
      Hear from the community we've grown with.
    </p>

    <div class="testimonial-grid">

      <div class="testimonial-card">
        <div class="quote"><img src="../assets/images/mind/double-quote-icon.svg"></div>
        <p>
          The mindfulness sessions transformed how our team approaches
          conflict. We are more empathetic and grounded now.
        </p>

        <div class="author">
          <strong>Sarah J.</strong>
          <span>HR Director</span>
        </div>
      </div>

      <div class="testimonial-card">
         <div class="quote"><img src="../assets/images/mind/double-quote-icon.svg"></div>
        <p>
          My son used to struggle with anxiety in school. The SEL
          program gave him tools to express himself confidently.
        </p>

        <div class="author">
          <strong>Rajesh K.</strong>
          <span>Parent</span>
        </div>
      </div>

      <div class="testimonial-card">
        <div class="quote"><img src="../assets/images/mind/double-quote-icon.svg"></div>
        <p>
          A safe space to explore my inner self. The narrative practices
          helped me rewrite my own story.
        </p>

        <div class="author">
          <strong>Elena M.</strong>
          <span>Workshop Participant</span>
        </div>
      </div>

      <div class="testimonial-card">
         <div class="quote"><img src="../assets/images/mind/double-quote-icon.svg"></div>
        <p>
          It's a chill spot to dive into my thoughts. The storytelling
          techniques really helped me change my own narrative.
        </p>

        <div class="author">
          <strong>Elena M.</strong>
          <span>Workshop Participant</span>
        </div>
      </div>

    </div>

  </div>

</section>

<style>


.testimonial-section{
background: url("../assets/images/mind/testimonials-bg.svg") no-repeat center center;
background-size: cover;
position: relative;

font-family: var(--font-secondary);
}
/* title */

.testimonial-title{
font-size:40px;
font-weight:600;
text-align: center;
}

.testimonial-subtitle{
color:#6b7280;
margin-bottom:50px;
text-align: center;
}

/* grid */

.testimonial-grid{
display:grid;
grid-template-columns:repeat(4,1fr);
gap:32px;
margin:auto;
}

/* card */

.testimonial-card{
position:relative;
padding:24px 32px;
border-radius:15px;
background:#fff;
box-shadow:0 8px 25px rgba(0,0,0,0.08);
transition:0.3s;

display:flex;
flex-direction:column;
}

/* gradient border */
.testimonial-card::before{
content:"";
position:absolute;
inset:0;
padding:0.8px; /* border thickness */

border-radius:15px;

background: linear-gradient(90deg, #EC7ECE 0%, #FFED40 73.44%);

-webkit-mask:
linear-gradient(#fff 0 0) content-box,
linear-gradient(#fff 0 0);

-webkit-mask-composite:xor;
mask-composite:exclude;

pointer-events:none;
}

.testimonial-card:hover{
transform:translateY(-5px);
}

/* quote */

.quote{
font-size:40px;
color:#f6d365;
margin-bottom:15px;
}

/* text */

.testimonial-card p{
color:#444;
line-height:1.6;
font-size:16px;
font-family: var(--font-secondary);
color: var(--dark);
}

/* author */

.author{
  margin-top:auto;
padding-top:48px;
font-family: var(--font-secondary);
}

.author strong{
display:block;
font-size:18px;
color: var(--grey);
}

.author span{
color:#06B6D4;
font-size:14px;
}

/* responsive */

@media(max-width:1000px){

.testimonial-grid{
grid-template-columns:repeat(2,1fr);
}

}

@media(max-width:600px){

.testimonial-grid{
grid-template-columns:1fr;
}

}
</style>