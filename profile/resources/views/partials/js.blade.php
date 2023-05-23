 <!-- JavaScript Libraries -->
 <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
 <script src="{{ asset('lib/chart/chart.min.js') }}"></script>
 <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
 <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
 <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
 <script src="{{ asset('lib/tempusdominus/js/moment.min.js') }}"></script>
 <script src="{{ asset('lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
 <script src="{{ asset('lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>
 
 <!-- Template Javascript -->
 <script src="{{ asset('js/main.js')}}"></script>
 <script>
    // handle clicks on the FAQ questions
    document.querySelectorAll('.faq li > h3').forEach(function(question) {
      question.addEventListener('click', function() {
        // hide all answer paragraphs
        document.querySelectorAll('.faq li > p').forEach(function(answer) {
          answer.style.display = 'none';
        });
  
        // show the answer for this question
        this.parentNode.querySelector('p').style.display = 'block';
      });
    });
  </script>
{{-- <script src="https://code.jquery.com/jquery-3.3.1.min.js" ></script> --}}
{{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> --}}
<script src="https://code.jquery.com/jquery-3.3.1.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
