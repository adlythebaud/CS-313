'use strict';

const e = React.createElement;
var test = "test";

class LikeButton extends React.Component {
  constructor(props) {
    super(props);
    this.state = { 
      login: false,
      signup: false,
      passwordReset: false 
    };
  }
  
  display = () => {
    axios.get('./get_data.php')
    .then((response) => {
      console.log(response.data);
    });
  }

  render() {
    
    const login = (
      <div>
        <div className="form-group">
          <input type="text" name="username" id="username_input"
            placeholder="username or email address."></input>
        </div>
        <div>
          <input type="password" name="password" id="password_input" placeholder="Enter your password."></input>
        </div>
        <input type="submit" value="submit"></input>
      </div>
    );
    
    const signup = (
      <div>
        <div className="form-group">
          <input type="text" name="username" id="username_input"
            placeholder="username or email address."></input>
        </div>
        <div>
          <input type="password" name="password" id="password_input" placeholder="Enter your password."></input>
        </div>
        <input type="submit" value="submit"></input>
      </div>
    );

    const passwordReset = (
      <div>
        <div className="form-group">
          <input type="text" name="username" id="username_input"
            placeholder="username or email address."></input>
        </div>  
        <input type="submit" value="submit"></input>
      </div>
    );

    const logginButton = <button onClick={() => this.setState({ login: true, signup: false, passwordReset: false })}>Login</button>;
    const signupButton = <button onClick={() => this.setState({ login: false, signup: true, passwordReset: false })}>Sign Up</button>;
    const passwordResetButton = <button onClick={() => this.setState({ login: false, signup: false, passwordReset: true })}>Password Reset</button>;


    if (this.state.login) {
      return (
        <div>
          <form action="./get_data.php" method="post" className="col-md-6">
            {login}  
          </form>
          {signupButton}
          {passwordResetButton}
        </div>
      );
    }

    return (
        <div>
          <button onClick={this.display}>Click Me!</button>
        </div>
        

      );
  }
}

const domContainer = document.querySelector('#form-root');
ReactDOM.render(e(LikeButton), domContainer);