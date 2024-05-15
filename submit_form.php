{
  "nbformat": 4,
  "nbformat_minor": 0,
  "metadata": {
    "colab": {
      "provenance": [],
      "toc_visible": true,
      "authorship_tag": "ABX9TyNIqypVVslLFNGlgNBRCUAj",
      "include_colab_link": true
    },
    "kernelspec": {
      "name": "python3",
      "display_name": "Python 3"
    },
    "language_info": {
      "name": "python"
    }
  },
  "cells": [
    {
      "cell_type": "markdown",
      "metadata": {
        "id": "view-in-github",
        "colab_type": "text"
      },
      "source": [
        "<a href=\"https://colab.research.google.com/github/elespius/Daily-Shop/blob/main/submit_form.php\" target=\"_parent\"><img src=\"https://colab.research.google.com/assets/colab-badge.svg\" alt=\"Open In Colab\"/></a>"
      ]
    },
    {
      "cell_type": "code",
      "source": [
        "<?php\n",
        "$servername = \"localhost\";\n",
        "$username = \"your_database_user\";\n",
        "$password = \"your_database_password\";\n",
        "$dbname = \"your_database_name\";\n",
        "\n",
        "// Create connection\n",
        "$conn = new mysqli($servername, $username, $password, $dbname);\n",
        "\n",
        "// Check connection\n",
        "if ($conn->connect_error) {\n",
        "    die(\"Connection failed: \" . $conn->connect_error);\n",
        "}\n",
        "\n",
        "// Get form data\n",
        "$title = $_POST['title'];\n",
        "$category = $_POST['category'];\n",
        "$image = $_POST['image'];\n",
        "\n",
        "// Insert form data into database\n",
        "$sql = \"INSERT INTO portfolio (title, category, image) VALUES ('$title', '$category', '$image')\";\n",
        "if ($conn->query($sql) === TRUE) {\n",
        "    echo \"New record created successfully\";\n",
        "} else {\n",
        "    echo \"Error: \" . $sql . \"<br>\" . $conn->error;\n",
        "}\n",
        "\n",
        "$conn->close();\n",
        "?>\n"
      ],
      "metadata": {
        "colab": {
          "base_uri": "https://localhost:8080/",
          "height": 108
        },
        "id": "XWj_pkbuTMOc",
        "outputId": "ac14258b-ba6d-471b-aaa4-be072e9daa40"
      },
      "execution_count": 4,
      "outputs": [
        {
          "output_type": "error",
          "ename": "SyntaxError",
          "evalue": "invalid syntax (<ipython-input-4-f8deb317890d>, line 1)",
          "traceback": [
            "\u001b[0;36m  File \u001b[0;32m\"<ipython-input-4-f8deb317890d>\"\u001b[0;36m, line \u001b[0;32m1\u001b[0m\n\u001b[0;31m    <?php\u001b[0m\n\u001b[0m    ^\u001b[0m\n\u001b[0;31mSyntaxError\u001b[0m\u001b[0;31m:\u001b[0m invalid syntax\n"
          ]
        }
      ]
    },
    {
      "cell_type": "code",
      "source": [],
      "metadata": {
        "id": "UQPonwdBgYrK"
      },
      "execution_count": null,
      "outputs": []
    }
  ]
}