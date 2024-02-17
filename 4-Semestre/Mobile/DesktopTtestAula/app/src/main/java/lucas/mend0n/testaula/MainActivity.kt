package lucas.mend0n.testaula

import androidx.appcompat.app.AppCompatActivity
import android.os.Bundle
import android.widget.Button
import android.widget.EditText
import android.widget.TextView
import android.widget.Toast

class MainActivity : AppCompatActivity() {

    lateinit var editpeso: EditText
    lateinit var editAltura: EditText
    lateinit var btnCalc: Button
    lateinit var txtImc: TextView

    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_main)

        editpeso = findViewById(R.id.editPeso)
        editAltura = findViewById(R.id.editAltura)
        btnCalc = findViewById(R.id.btn_calc)
        txtImc = findViewById(R.id.txtIMC)

        btnCalc.setOnClickListener {
            val height =  editpeso?.text.toString()
            val weight = editAltura?.text.toString()

            if (height.isEmpty() || weight.isEmpty()) {
                Toast.makeText(this, "Preencha os campos corretamente seu CORNO", Toast.LENGTH_SHORT)
                    .show()
                return@setOnClickListener
            }
            val dbheight = height.toDouble()
            val dbwheight = weight.toDouble()
            val imc: Double = dbwheight / (dbheight * dbheight)
            txtImc.text = imc.toString()
        }


    }
}