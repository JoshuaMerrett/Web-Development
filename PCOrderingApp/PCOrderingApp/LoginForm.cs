using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace PCOrderingApp
{
    public partial class LoginForm : Form
    {
        //Lists to store registered usernames and passwords
        List<string> usernamesList = new List<string>();
        List<string> passwordsList = new List<string>();

        public LoginForm()
        {
            InitializeComponent();
            //Sets the password box to use the password characters
            txtPassword.UseSystemPasswordChar = true;

            //Adds the username JoshuaM123 to the username list
            usernamesList.Add("JoshuaM123");
            //Adds the password Pass123 to the password list
            passwordsList.Add("Pass123");

            //Adds the username Brit15 to the username list
            usernamesList.Add("Brit15");
            //Adds the password Fiat500 to the password list
            passwordsList.Add("Fiat500");

            //Adds the username Thanos to the username list
            usernamesList.Add("Thanos");
            //Adds the password Gauntlet6 to the password list
            passwordsList.Add("Gauntlet6");
        }

        //Login click method
        private void btnLogin_Click(object sender, EventArgs e)
        {
            //Sets the variable that will be used in the method
            int usernameIndex = 0;
            int passwordIndex = 0;
            bool usernameFound = false;
            bool passwordFound = false;

            //Loop that will check if the username list is greater than the value of i, and if it is i will be incremented
            for (int i = 0; i < usernamesList.Count; i++)
            {
                //Statement that checks if the list items are equal to the text the user has entered
                if (usernamesList[i] == txtUsername.Text)
                {
                    //Sets the username index equal to the value of i
                    usernameIndex = i;
                    //Sets the username to true, resulting in the username being correct
                    usernameFound = true;
                }
            }

            //Loop that will check if the password list is greater than the value of i, and if it is i will be incremented
            for (int i = 0; i < passwordsList.Count; i++)
            {
                //Statement that checks if the list items are equal to the text the user has entered
                if (passwordsList[i] == txtPassword.Text)
                {
                    //Sets the password index equal to the value of i
                    passwordIndex = i;
                    //Sets the password to true, resulting in the password being correct
                    passwordFound = true;
                }
            }

            //Statement the checks to see it the variables usernameFound and passwordFound are both equal to true
            if (usernameFound == true && passwordFound == true)
            {
                //Statement the checks if the value of usernameIndex is equal to passwordIndex
                if (usernameIndex == passwordIndex)
                {
                    //Displays the message box
                    MessageBox.Show("Login successful");
                    //Creates the second form in the application
                    PartOrderForm form2 = new PartOrderForm();
                    //Hides the login form
                    this.Hide();
                    //Displays the second form
                    form2.Show();
                }

                //Statement that displays if the previous statement didn't execute
                else
                {
                    //Displays the message box
                    MessageBox.Show("Incorrect Login Details");
                }
            }

            //Statement that displays if the previous statement didn't execute
            else
            {
                //Displays the message box
                MessageBox.Show("Incorrect Login Details");
            }

            //Clears the text in the username box
            txtUsername.Clear();
            //Clears the text in the password box
            txtPassword.Clear();

        }
    }
}
