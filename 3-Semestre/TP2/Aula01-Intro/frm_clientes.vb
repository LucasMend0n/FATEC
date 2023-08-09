Public Class frm_clientes
    Dim diretorio As String 'variavel local'
    Private Sub img_photo_Click(sender As Object, e As EventArgs) Handles img_photo.Click
        Try
            With OpenFileDialog1
                .Title = "SELECIONE UMA FOTO"
                .InitialDirectory = Application.StartupPath & "\photos"
                .ShowDialog()

                diretorio = .FileName
                img_photo.Load(diretorio)


            End With

        Catch ex As Exception

        End Try
    End Sub
End Class