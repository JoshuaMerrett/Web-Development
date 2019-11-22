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
    public partial class PartOrderForm : Form
    {
        //Object lists for the components of the computer and the reciept
        List<Case> pccase = new List<Case>();
        List<Motherboard> motherboard = new List<Motherboard>();
        List<CPU> cpu = new List<CPU>();
        List<PSU> psu = new List<PSU>();
        List<Graphics_Card> graphics_card = new List<Graphics_Card>();
        List<RAM> ram = new List<RAM>();
        List<HDD> hdd = new List<HDD>();
        List<SSD> ssd = new List<SSD>();
        List<Reciept> reciept = new List<Reciept>();

        public PartOrderForm()
        {
            InitializeComponent();

        }

        private void PartOrderForm_Load(object sender, EventArgs e)
        {
            //This wll remove the receipt tab page on load, it will be filled in on completion
            tcMainOrderForm.TabPages.Remove(tpCheckout);
        }

        //Case button click method
        private void btnCase_Click(object sender, EventArgs e)
        {
            //Sets the variables that will be used in the method
            int selected = 0;
            string name = "";
            double price = 0;

            //Clears the pccase object
            pccase.Clear();

            //Each item in the chekbox is checked to see if it is checked, if it is then it will be dispayed in the case recipt box
            for (int i = 0; i < cbxCase.Items.Count; i++)
            {
                //Statement that checks is the checked item is i
                if (cbxCase.GetItemChecked(i))
                {
                    selected = i;
                }
            }

            //Checks the index of the seleced Case 
            if (selected == 0)
            {
                name = "Case A";
                price = 45.00;
            }
            else if (selected == 1)
            {
                name = "Case B";
                price = 28.00;
            }
            else if (selected == 2)
            {
                name = "Case C";
                price = 35.00;
            }
            else if (selected == 3)
            {
                name = "Case D";
                price = 70.00;
            }

            //displays the name and total in the motherboard reciept list box
            lstCaseReciept.Items.Add(name + " | £" + price.ToString());

            //Stores motherboard
            Case c = new Case
            {
                name = name,
                price = price
            };

            //Adds the value of m to the motherboard list
            pccase.Add(c);
        }

        //Adds the secelcted motherboard the the reciept
        private void btnMotherboard_Click(object sender, EventArgs e)
        {
            //Sets the variables that will be used in the method
            int selected = 0;
            string name = "";
            double price = 0;

            //Clears the motherboard object
            motherboard.Clear();

            //Each item in the chekbox is checked to see if it is checked, if it is then it will be dispayed in the case recipt box
            for (int i = 0; i < cbxMotherboard.Items.Count; i++)
            {
                //Statement that checks is the checked item is i
                if (cbxMotherboard.GetItemChecked(i))
                {
                    selected = i;
                }
            }

            //Checks the index of the seleced Motherboard
            if (selected == 0)
            {
                name = "Motherboard A";
                price = 75.00;
            }
            else if (selected == 1)
            {
                name = "Motherboard B";
                price = 55.00;
            }
            else if (selected == 2)
            {
                name = "Motherboard C";
                price = 40.00;
            }
            else if (selected == 3)
            {
                name = "Motherboard D";
                price = 67.00;
            }

            //displays the name and total in the motherboard reciept list box
            lstMotherboardReciept.Items.Add(name + " | £" + price.ToString());

            //Stores motherboard
            Motherboard m = new Motherboard
            {
                name = name,
                price = price
            };

            //Adds the value of m to the motherboard list
            motherboard.Add(m);
        }

        //NextCPU button click method
        private void btnNextCPU_Click(object sender, EventArgs e)
        {
            //Changes the tab to the CPUPSUGraphics tab
            tcMainOrderForm.SelectedTab = tpCPUGPSUGraphics;
        }

        //Adds the secelcted cpu the the reciept
        private void btnCPU_Click(object sender, EventArgs e)
        {
            //Sets the variables that will be used in the method
            int selected = 0;
            string name = "";
            double price = 0;

            //Clears the cpu object
            cpu.Clear();

            //Each item in the chekbox is checked to see if it is checked, if it is then it will be dispayed in the case recipt box
            for (int i = 0; i < cbxCPU.Items.Count; i++)
            {
                //Statement that checks is the checked item is i
                if (cbxCPU.GetItemChecked(i))
                {
                    selected = i;
                }
            }

            //Checks the index of the seleced CPU
            if (selected == 0)
            {
                name = "CPU A";
                price = 80.00;
            }
            else if (selected == 1)
            {
                name = "CPU B";
                price = 60.00;
            }
            else if (selected == 2)
            {
                name = "CPU C";
                price = 78.00;
            }
            else if (selected == 3)
            {
                name = "CPU D";
                price = 48.00;
            }

            //displays the name and total in the cpu reciept list box
            lstCPUReciept.Items.Add(name + " | £" + price.ToString());

            //Stores psu
            CPU cp = new CPU
            {
                name = name,
                price = price
            };

            //Adds the value of cp to the cpu list
            cpu.Add(cp);
        }

        //Adds the secelcted psu the the reciept
        private void btnPSU_Click(object sender, EventArgs e)
        {
            //Sets the variables that will be used in the method
            int selected = 0;
            string name = "";
            double price = 0;

            //Clears the psu object
            psu.Clear();

            //Each item in the chekbox is checked to see if it is checked, if it is then it will be dispayed in the case recipt box
            for (int i = 0; i < cbxPSU.Items.Count; i++)
            {
                //Statement that checks is the checked item is i
                if (cbxPSU.GetItemChecked(i))
                {
                    selected = i;
                }
            }

            //Checks the index of the seleced PSU
            if (selected == 0)
            {
                name = "PSU A";
                price = 40.00;
            }
            else if (selected == 1)
            {
                name = "PSU B";
                price = 39.00;
            }
            else if (selected == 2)
            {
                name = "PSU C";
                price = 25.00;
            }
            else if (selected == 3)
            {
                name = "PSU D";
                price = 50.00;
            }

            //displays the name and total in the psu reciept list box
            lstPSUReciept.Items.Add(name + " | £" + price.ToString());

            //Stores psu
            PSU p = new PSU
            {
                name = name,
                price = price
            };

            //Adds the value of p to the psu list
            psu.Add(p);
        }

        //Adds the secelcted graphics card the the reciept
        private void btnGraphicsCard_Click(object sender, EventArgs e)
        {
            //Sets the variables that will be used in the method
            int selected = 0;
            string name = "";
            double price = 0;

            //Clears the graphics_card object
            graphics_card.Clear();

            //Each item in the chekbox is checked to see if it is checked, if it is then it will be dispayed in the case recipt box
            for (int i = 0; i < cbxGraphicsCard.Items.Count; i++)
            {
                //Statement that checks is the checked item is i
                if (cbxGraphicsCard.GetItemChecked(i))
                {
                    selected = i;
                }
            }

            //Checks the index of the seleced Graphics Card
            if (selected == 0)
            {
                name = "Graphics Card A";
                price = 75.00;
            }
            else if (selected == 1)
            {
                name = "Graphics Card B";
                price = 55.00;
            }
            else if (selected == 2)
            {
                name = "Graphics Card C";
                price = 40.00;
            }
            else if (selected == 3)
            {
                name = "Graphics Card D";
                price = 67.00;
            }

            //displays the name and total in the graphics card reciept list box
            lstGraphicsCardReciept.Items.Add(name + " | £" + price.ToString());

            //Stores graphics card
            Graphics_Card gc = new Graphics_Card
            {
                name = name,
                price = price
            };

            //Adds the value of gc to the graphics card list
            graphics_card.Add(gc);
        }

        //NextRAM button click method
        private void btnNextRAM_Click(object sender, EventArgs e)
        {
            //Changes the tab to the RAMHDDSSD tab
            tcMainOrderForm.SelectedTab = tpRAMHDDSSD;
        }

        //Adds the secelcted ram the the reciept
        private void btnRAM_Click(object sender, EventArgs e)
        {
            //Sets the variables that will be used in the method
            int selected = 0;
            string name = "";
            double price = 0;

            //Clears the ram object
            ram.Clear();

            //Each item in the chekbox is checked to see if it is checked, if it is then it will be dispayed in the case recipt box
            for (int i = 0; i < cbxRAM.Items.Count; i++)
            {
                //Statement that checks is the checked item is i
                if (cbxRAM.GetItemChecked(i))
                {
                    selected = i;
                }
            }

            //Checks the index of the seleced RAM
            if (selected == 0)
            {
                name = "RAM A";
                price = 10.00;
            }
            else if (selected == 1)
            {
                name = "RAM B";
                price = 25.00;
            }
            else if (selected == 2)
            {
                name = "RAM C";
                price = 15.00;
            }
            else if (selected == 3)
            {
                name = "RAM D";
                price = 18.00;
            }

            //displays the name and total in the ram reciept list box
            lstRAMReciept.Items.Add(name + " | £" + price.ToString());

            //Stores ram
            RAM r = new RAM
            {
                name = name,
                price = price
            };

            //Adds the value of r to the ram list
            ram.Add(r);
        }

        //Adds the secelcted hhd the the reciept
        private void btnHDD_Click(object sender, EventArgs e)
        {
            //Sets the variables that will be used in the method
            int selected = 0;
            string name = "";
            double price = 0;
            int quantity = Convert.ToInt32(numUpDownHDD.Value);

            //Clears the hdd object
            hdd.Clear();

            //Satement that checks the value of the numeric up down is less than or equal to 4
            if (numUpDownHDD.Value <= 4)
            {
                //Each item in the chekbox is checked to see if it is checked, if it is then it will be dispayed in the case recipt box
                for (int i = 0; i < cbxHDD.Items.Count; i++)
                {
                    //Statement that checks is the checked item is i
                    if (cbxHDD.GetItemChecked(i))
                    {
                        selected = i;
                    }
                }

                //Checks the index of the seleced HDD
                if (selected == 0)
                {
                    name = "HDD A";
                    price = 10.00;
                }
                else if (selected == 1)
                {
                    name = "HDD B";
                    price = 25.00;
                }
                else if (selected == 2)
                {
                    name = "HDD C";
                    price = 15.00;
                }
                else if (selected == 3)
                {
                    name = "HDD D";
                    price = 18.00;
                }

                //Calculates the price x quality and stores it in the hddtotal variable
                double hddtotal = price * quantity;

                //displays the name, total and quantity in the hdd reciept list box
                lstHDDReciept.Items.Add(name + " | £" + hddtotal.ToString() + " | " + quantity);

                //Stores hdd
                HDD h = new HDD
                {
                    name = name,
                    price = hddtotal,
                    quantity = quantity
                };

                //Adds the value of h to the hdd list
                hdd.Add(h);

            }
            //displays if the previous statement didn't execute
            else
            {
                //Displays message box
                MessageBox.Show("A max of 4 HDD can be selected!");
            }
        }

        //Adds the secelcted ssd the the reciept
        private void btnSSD_Click(object sender, EventArgs e)
        {
            //Sets the variables that will be used in the method
            int selected = 0;
            string name = "";
            double price = 0;
            int quantity = Convert.ToInt32(numUpDownSSD.Value);

            //Clears the ssd object
            ssd.Clear();

            //Satement that checks the value of the numeric up down is less than or equal to 4
            if (numUpDownSSD.Value <= 4)
            {
                //Each item in the chekbox is checked to see if it is checked, if it is then it will be dispayed in the case recipt box
                for (int i = 0; i < cbxSSD.Items.Count; i++)
                {
                    //Statement that checks is the checked item is i
                    if (cbxSSD.GetItemChecked(i))
                    {
                        selected = i;
                    }
                }

                //Checks the index of the seleced SSD
                if (selected == 0)
                {
                    name = "SSD A";
                    price = 10.00;
                }
                else if (selected == 1)
                {
                    name = "SSD B";
                    price = 25.00;
                }
                else if (selected == 2)
                {
                    name = "SSD C";
                    price = 15.00;
                }
                else if (selected == 3)
                {
                    name = "SSD D";
                    price = 18.00;
                }

                //Calculates the price x quality and stores it in the ssdtotal variable
                double ssdtotal = price * quantity;

                //displays the name, total and quantity in the ssd reciept list box
                lstSSDReciept.Items.Add(name + " | £" + ssdtotal.ToString() + " | " + quantity);

                //Stores ssd 
                SSD ss = new SSD
                {
                    name = name,
                    price = ssdtotal,
                    quantity = quantity
                };

                //Adds the value of ss to the ssd list
                ssd.Add(ss);

            }
            //displays if the previous statement didn't execute
            else
            {
                //Displays message box
                MessageBox.Show("A max of 4 SSD can be selected!");
            }
        }

        //NextCheckout buton click method
        private void btnNextCheckout_Click(object sender, EventArgs e)
        {
            //Adds the checkout page to the tab page
            tcMainOrderForm.TabPages.Add(tpCheckout);
            //Changes the tab to the checkout tab
            tcMainOrderForm.SelectedTab = tpCheckout;

            //Calls the createReciept method
            CreateReciept();
        }

        //Creates the reciept using the parts stored in each individual reciept. This then displays the parts in the full parts rich text box, along with the price and quantity of specific parts.
        private void CreateReciept()
        {
            //Ensures that only 1 receipt is displaye at a time
            reciept.Clear();

            //Creates a new reciept object
            Reciept reciepts = new Reciept();

            //Creates reciets lists for all parts
            reciepts.orderCase = new List<Case>();
            reciepts.orderMotherboard = new List<Motherboard>();
            reciepts.orderCPU = new List<CPU>();
            reciepts.orderPSU = new List<PSU>();
            reciepts.orderGraphicsCard = new List<Graphics_Card>();
            reciepts.orderRAM = new List<RAM>();
            reciepts.orderHDD = new List<HDD>();
            reciepts.orderSSD = new List<SSD>();

            //Adds Case to reciepts
            foreach (Case c in pccase)
            {
                //stores the Case that the user chooses in the reciept
                reciepts.orderCase.Add(c);
                //dislays the name and total of the chosen Case in the rich text box
                rtxtList.AppendText(c.name + " | £" + c.price);
            }

            //Adds Motherboard to reciepts
            foreach (Motherboard m in motherboard)
            {
                //stores the Motherboard that the user chooses in the reciept
                reciepts.orderMotherboard.Add(m);
                //dislays the name and total of the chosen Motherbaord in the rich text box
                rtxtList.AppendText(Environment.NewLine + m.name + " | £" + m.price);
            }

            //Adds CPU to reciepts
            foreach (CPU cu in cpu)
            {
                //stores the CPU that the user chooses in the reciept
                reciepts.orderCPU.Add(cu);
                //dislays the name and total of the chosen CPU in the rich text box
                rtxtList.AppendText(Environment.NewLine + cu.name + " | £" + cu.price);
            }

            //Adds PSU to reciepts
            foreach (PSU p in psu)
            {
                //stores the PSU that the user chooses in the reciept
                reciepts.orderPSU.Add(p);
                //dislays the name and total of the chosen PSU in the rich text box
                rtxtList.AppendText(Environment.NewLine + p.name + " | £" + p.price);
            }

            //Adds Graphics Card to reciepts
            foreach (Graphics_Card gc in graphics_card)
            {
                //stores the Graphics Card that the user chooses in the reciept
                reciepts.orderGraphicsCard.Add(gc);
                //dislays the name and total of the chosen Grahics Card in the rich text box
                rtxtList.AppendText(Environment.NewLine + gc.name + " | £" + gc.price);
            }

            //Adds RAM to reciepts
            foreach (RAM r in ram)
            {
                //stores the RAM that the user chooses in the reciept
                reciepts.orderRAM.Add(r);
                //dislays the name and total of the chosen RAM in the rich text box
                rtxtList.AppendText(Environment.NewLine + r.name + " | £" + r.price);
            }

            //Adds HDD to reciepts
            foreach (HDD h in hdd)
            {
                //creates a double variable the stores the price of the HHD
                double hddtotal = h.price;
                //stores the HDD that the user chooses in the reciept
                reciepts.orderHDD.Add(h);
                //dislays the name, total and quantity of the chosen HDD in the rich text box
                rtxtList.AppendText(Environment.NewLine + h.name + " | £" + hddtotal + " | " + h.quantity);
            }

            //Adds SSD to reciepts
            foreach (SSD ss in ssd)
            {
                //creates a double variable the stores the price of the SSD
                double ssdtotal = ss.price;
                //stores the SSD that the user chooses in the reciept
                reciepts.orderSSD.Add(ss);
                //dislays the name, total and quantity of the chosen SSD in the rich text box
                rtxtList.AppendText(Environment.NewLine + ss.name + " | £" + ssdtotal + " | " + ss.quantity);
            }
            //Creates a new line and adds the text in the richtextbox
            rtxtList.AppendText(Environment.NewLine + "------------------------Total------------------------"); 
            //Calls the CalcTotal function when the orderCost is required in the reciept
            reciepts.orderCost = CalcTotal();
            //Creates a new line in the full parts richtextbox and displays the order total before payment options are selected
            rtxtList.AppendText(Environment.NewLine + "£" + reciepts.orderCost);

            //Adds all componets selected to the reciept list
            reciept.Add(reciepts);
        }

        //Calculates the total price of all components before the payment option is selected. Displays the price in the full price rich text box.
        private double CalcTotal()
        {
            //Sets the variable of orderCost to 0;
            double orderCost = 0;

            //Checks the Case stored in the list
            foreach (Case c in pccase)
            {
                //Adds the price of the case to the orderCost
                orderCost += c.price;
            }

            //Checks the Motherboard stored in the list
            foreach (Motherboard m in motherboard)
            {
                //Adds the price of the motherboard to the orderCost
                orderCost += m.price;
            }

            //Checks the CPU stored in the list
            foreach (CPU cp in cpu)
            {
                //Adds the price of the cpu to the orderCost
                orderCost += cp.price;
            }

            //Checks the PSU stored in the list
            foreach (PSU p in psu)
            {
                //Adds the price of the psu to the orderCost
                orderCost += p.price;
            }

            //Checks the Graphics Card stored in the list
            foreach (Graphics_Card gc in graphics_card)
            {
                //Adds the price of the graphics card to the orderCost
                orderCost += gc.price;
            }

            //Checks the RAM stored in the list
            foreach (RAM r in ram)
            {
                //Adds the price of the ram to the orderCost
                orderCost += r.price;
            }

            //Checks the HDD stored in the list
            foreach (HDD h in hdd)
            {
                //Adds the price of the hdd to the orderCost
                orderCost += h.price;
            }

            //Checks the SSD stored in the list
            foreach (SSD ss in ssd)
            {
                //Adds the price of the ssd to the orderCost
                orderCost += ss.price;
            }

            //Returns the total of all parts to the orderCost
            return orderCost;
        }

        private void cbxOption_SelectedIndexChanged(object sender, EventArgs e)
        {
            //Sets the variable of orderCost to the CalcTotal(); method
            double orderCost = CalcTotal();

            //Payment option for six months calculations
            //Calculates 10% of the original price
            double sixmoths = orderCost * 0.1;
            //Subtracts the 10% deposit from the original price and divides it by 6
            double eachmonthstotal = (orderCost - sixmoths) / 6;

            //Payment option for twelve months calculations
            //Calculates 10% of the original price
            double twelvemonths = orderCost * 0.1;
            //Subtracts the 10% deposit from the original price, then add the 13% interest to the price and divides the price by 12
            double eachmonthstotal2 = ((orderCost - twelvemonths) * 1.13) / 12;

            //Checks to see if the option selected is equal to Pay in full
            if (cbxOption.SelectedItem.ToString() == "Pay in full")
            {
                //If this option is selected then the full price will be displayed in the total price text box
                txtFullPrice.Text = "£" + orderCost.ToString();
            }
            //Checks to see if the option selected is equal to Pay over 6 months
            else if (cbxOption.SelectedItem.ToString() == "Pay over 6 months (Requires 10% deposit)")
            {
                //If this option is selected then the 10% deposit will be displayed along with the remaining balanced spread equally over the next 6 months.
                txtFullPrice.Text = "£" + sixmoths + " to pay leaving £" + eachmonthstotal + " to pay per month";
            }
            //Checks to see if the option selected is equal to Pay over 12 months
            else if (cbxOption.SelectedItem.ToString() == "Pay over 12 months at 13% interest (Requires 10% deposit)")
            {
                //If this option is selected then the 10% deposit will be displayed along with the remaining balance with the interesed added, spread equally over the next 12 months
                txtFullPrice.Text = "£" + twelvemonths + " to pay leaving " + $"{eachmonthstotal2:C2} to pay per month";
            }
        }

        //Checkout button
        private void btnCheckout_Click(object sender, EventArgs e)
        {
            //This message box will display when the checkout button is pressed. The button will display the customer details and order total.
            MessageBox.Show(txtName.Text + "\n" + txtEmail.Text + "\n" + txtPhone.Text + "\n" + rtxtAddress.Text + "\n" + "----------------" + "\n" + txtFullPrice.Text);
        }

        class Case
        {
            //When a case is selected all information relating to the case selected is collected and stored. Once selected the employee will press the add button to add the case to the case list.
            public string name;
            public double price;
        }

        class Motherboard
        {
            //When a motherboard is selected all information relating to the motherboard selected is collected and stored. Once selected the employee will press the add button to add the motherboard to the case list.
            public string name;
            public double price;
        }

        class CPU
        {
            //When a CPU is selected all information relating to the CPU selected is collected and stored. Once selected the employee will press the add button to add the case to the CPU list.
            public string name;
            public double price;
        }

        class PSU
        {
            //When a PSU is selected all information relating to the PSU selected is collected and stored. Once selected the employee will press the add button to add the case to the PSU list.
            public string name;
            public double price;
        }

        class Graphics_Card
        {
            //When a graphics card is selected all information relating to the graphics card selected is collected and stored. Once selected the employee will press the add button to add the graphics card to the case list.
            public string name;
            public double price;
        }

        class RAM
        {
            //When a RAM is selected all information relating to the RAM selected is collected and stored. Once selected the employee will press the add button to add the RAM to the case list.
            public string name;
            public double price;
        }

        class HDD
        {
            //When a HDD is selected all information relating to the HDD selected is collected and stored. Once selected the employee will press the add button to add the HDD to the case list.
            public string name;
            public int quantity;
            public double price;
        }

        class SSD
        {
            //When a SSD is selected all information relating to the SSD selected is collected and stored. Once selected the employee will press the add button to add the SSD to the case list.
            public string name;
            public int quantity;
            public double price;
        }

        class Reciept
        {
            //Customer Details
            public string name;
            public string email;
            public string phone;
            public string address;

            //Order details
            public List<Case> orderCase { get; set; }
            public List<Motherboard> orderMotherboard { get; set; }
            public List<CPU> orderCPU { get; set; }
            public List<PSU> orderPSU { get; set; }
            public List<Graphics_Card> orderGraphicsCard { get; set; }
            public List<RAM> orderRAM { get; set; }
            public List<HDD> orderHDD { get; set; }
            public List<SSD> orderSSD { get; set; }

            //Order Cost
            public double orderCost;
        }
    }
}
