<h1>E-mail küldése</h1>
<div class=email>
    <form action="?oldal=visszaad" method="post">
        <div class=wrapper>
            <label for="name" >Név: </label>
            <input type=text name="name" id="name" required>
        </div>
        
        <div class=wrapper>
            <label for="email" >E-mail cím: </label>
            <input type=email name="email" id="email" required>
        </div>
      
        <div class=wrapper>
            <label for="msg" >Üzenet: </label>
            <textarea rows="20" cols="40" name="msg" id="msg" required></textarea>
        </div>
        
        <div class=wrapper>
            <input type="submit" class="button" value="Küldés">
        </div>
    </form> 
</div>
<img src="styles/images/postalada.jpg">