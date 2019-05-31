'use strict';

var shoeContainer = document.querySelector('#shoes');
var cartIcon = document.querySelector("#shopping-cart");

const e = React.createElement;

class LikeButton extends React.Component {
  constructor(props) {
    super(props);
    this.state = { 
      login: true,
      signup: false,
      passwordReset: false 
    };
  }

  render() {
    
    
    const login = (
      <div>
        <form action="./get_data.php" method="post" className="col-md-6">
          
          <div className="form-group">
            <input type="text" name="username" id="username_input" placeholder="Enter your username or email address."></input>
          </div>
          <div>
            <input type="password" name="password" id="password_input" placeholder="Enter your password."></input>
          </div>
          <input type="submit" value="submit"></input>
        </form>
      </div>
    

    );
    
    
    
    const signup = <button onClick={() => this.setState({ login: false, signup: true, passwordReset: false })}>Sign Up</button>;
    const passwordReset = <button onClick={() => this.setState({ login: true, signup: false, passwordReset: true })}>Password Reset</button>;


    if (this.state.login) {
      // return login UI.
      // set other states to false.
      return (
        <div>
          {login}
          {signup}
          {passwordReset}
        </div>
      );
    }

    return (
        <div>
          
          {login}
          {signup}
          {passwordReset}
        </div>
        

      );
  }
}

const domContainer = document.querySelector('#form-root');
ReactDOM.render(e(LikeButton), domContainer);