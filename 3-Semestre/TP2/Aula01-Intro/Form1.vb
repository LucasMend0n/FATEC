Public Class Form1
    Private Sub CadastroClientesToolStripMenuItem_Click(sender As Object, e As EventArgs) Handles CadastroClientesToolStripMenuItem.Click
        Try
            frm_clientes.ShowDialog()

        Catch ex As Exception
            MsgBox("Erro de execução!", MsgBoxStyle.Critical + MsgBoxStyle.OkOnly, "Atenção!")

        End Try
    End Sub

    Private Sub CalculadoraToolStripMenuItem_Click(sender As Object, e As EventArgs) Handles CalculadoraToolStripMenuItem.Click
        Try
            Process.Start("calc.exe")
        Catch ex As Exception
            MsgBox("Erro de execução!", MsgBoxStyle.Critical + MsgBoxStyle.OkOnly, "Atenção!")

        End Try
    End Sub

    Private Sub ExcelToolStripMenuItem_Click(sender As Object, e As EventArgs) Handles ExcelToolStripMenuItem.Click
        Try
            Process.Start("excel.exe")
        Catch ex As Exception
            MsgBox("Erro de execução!", MsgBoxStyle.Critical + MsgBoxStyle.OkOnly, "Atenção!")

        End Try
    End Sub

    Private Sub BlocoDeNotasToolStripMenuItem_Click(sender As Object, e As EventArgs) Handles BlocoDeNotasToolStripMenuItem.Click
        Try
            Process.Start("notepad.exe")
        Catch ex As Exception
            MsgBox("Erro de execução!", MsgBoxStyle.Critical + MsgBoxStyle.OkOnly, "Atenção!")

        End Try
    End Sub
End Class
