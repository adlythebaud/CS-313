'use strict';

const e = React.createElement;
var test = "test";

class SignUpForm extends React.Component {
  constructor(props) {
    super(props);
    this.state = { 
       first_name: "",
       last_name: "",
       email_address: "",
       username: "",
       password: "",
       password_confirm: ""
       
    };
  }

  validate = (state) => {
    const first_name_valid = (state.first_name.length > 0);
    const last_name_valid = (state.last_name.length > 0);
    const email_valid = (state.email_address.length > 0);
    const username_valid = (state.username.length > 0);   
    const password_length_valid = (state.password.length > 0);
    const password_confirm_valid = (state.password_confirm === state.password);

    if (first_name_valid && last_name_valid && email_valid && username_valid && password_length_valid && password_confirm_valid) {
        return true;
    }
    return false;
  }

  handleFormSubmit = (e) => {
    e.preventDefault();
    // form validate here.
    if (this.validate(this.state)) {
        console.log("correct submissions");
        axios({
          method: 'post',
          url: '../server-scripts/save_new_user.php',
          headers: { 'content-type': 'application/json' },
          data: this.state
        })
        .then((response) => {
          
          console.log(response.data);

          if (response.data == 1) {
              // go to Tinderfy Home.
              window.location = "../pages/home.php";
          } else {
              alert("There was an error signing you up. Please try again.");
          }
        });
    } else {
        alert("We encountered an error in signing you up. Please try again.");
    }
  }

  
  
  render() {

    const formSubmitButton = (
      <input type="submit" value="submit" onClick={e => this.handleFormSubmit(e)}></input>
    );
    
    // TODO: Form Validate!
    return (
        <div>
            {/* Render form here. */}
            <form className="col-md-6">
                <div className="form-group">
                    <label htmlFor="first_name">First Name</label>
                    <input type="text" className="form-control" placeholder="Enter Your First Name" value={this.state.first_name} onChange={e => this.setState({first_name: e.target.value})}></input>
                </div>

                <div className="form-group">
                    <label htmlFor="last_name">Last Name</label>
                    <input type="text" className="form-control" placeholder="Enter Your Last Name" value={this.state.last_name} onChange={e => this.setState({ last_name: e.target.value})}></input>
                </div>

                <div className="form-group">
                    <label >Email Address</label>
                    <input type="text" className="form-control" placeholder="Enter a valid email address" value={this.state.email_address} onChange={e => this.setState({ email_address: e.target.value})}></input>
                </div>

                <div className="form-group">
                    <label>Desired Username</label>
                    <input type="text" className="form-control" placeholder="Enter A Username" value={this.state.username} onChange={e => this.setState({ username: e.target.value})}></input>
                </div>
                
                <div className="form-group">
                    <label>Password</label>
                    <input type="password" className="form-control" placeholder="Enter a valid password" value={this.state.password} onChange={e => this.setState({ password: e.target.value})}></input>
                </div>

                <div className="form-group">
                    <label>Confirm Password</label>
                    <input type="password" className="form-control" placeholder="Confirm Password" value={this.state.password_confirm} onChange={e => this.setState({ password_confirm: e.target.value})}></input>
                </div>

                {formSubmitButton}
            </form>
            
        </div>
      );
  }
}

const domContainer = document.querySelector('#root');
ReactDOM.render(e(SignUpForm), domContainer);